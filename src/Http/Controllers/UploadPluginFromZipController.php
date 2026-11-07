<?php

namespace FriendsOfBotble\PluginManager\Http\Controllers;

use Botble\Base\Http\Controllers\BaseController;
use Botble\Base\Supports\Breadcrumb;
use Botble\PluginManagement\Services\PluginService;
use FriendsOfBotble\PluginManager\Http\Middleware\EnsurePluginUploadIsAllowed;
use FriendsOfBotble\PluginManager\Http\Requests\UploadFilePluginRequest;
use FriendsOfBotble\PluginManager\Services\PluginZipHandler;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;
use Illuminate\Validation\ValidationException;

class UploadPluginFromZipController extends BaseController
{
    /**
     * Server-side record of an upload waiting for the "Update plugin" confirmation.
     * The update request never sends a path or plugin name; it reads this instead.
     */
    public const PENDING_UPDATE_SESSION_KEY = 'fob_plugin_manager.pending_update';

    protected function breadcrumb(): Breadcrumb
    {
        return parent::breadcrumb()
            ->add(trans('packages/plugin-management::plugin.plugins'), route('plugins.index'));
    }

    public function index(): View
    {
        $this->pageTitle(trans('plugins/fob-plugin-manager::plugin-manager.plugin_upload.title'));

        return view('plugins/fob-plugin-manager::uploader', [
            'enabled' => EnsurePluginUploadIsAllowed::isEnabled(),
            'allowed' => EnsurePluginUploadIsAllowed::allows(auth()->user()),
        ]);
    }

    public function store(UploadFilePluginRequest $request, PluginService $pluginService, PluginZipHandler $zipHandler)
    {
        $this->pageTitle(trans('plugins/fob-plugin-manager::plugin-manager.plugin_upload.upload_plugin'));

        $this->discardPendingUpdate($zipHandler);

        $upload = $request->file('file');
        $fileName = $upload->getClientOriginalName();
        $storedName = $zipHandler->store($upload);
        $filePath = $zipHandler->tmpPath($storedName);
        $keepFile = false;

        try {
            $zip = $zipHandler->open($filePath);

            try {
                [$prefix, $pluginContent, $pluginName] = $zipHandler->readPluginManifest($zip);

                $minimumCoreVersion = Arr::get($pluginContent, 'minimum_core_version');
                $coreVersion = get_core_version();

                if ($minimumCoreVersion && version_compare($coreVersion, $minimumCoreVersion, '<')) {
                    return $this
                        ->httpResponse()
                        ->setError()
                        ->setMessage(trans('packages/plugin-management::plugin.minimum_core_version_not_met', [
                            'plugin' => $pluginContent['name'],
                            'minimum_core_version' => $minimumCoreVersion,
                            'current_core_version' => $coreVersion,
                        ]));
                }

                $pluginPath = plugin_path($pluginName);

                if (File::exists($pluginPath)) {
                    $oldPluginContent = $pluginService->getPluginInfo($pluginName);

                    if (! $oldPluginContent) {
                        throw ValidationException::withMessages([
                            'file' => trans('plugins/fob-plugin-manager::plugin-manager.plugin_upload.validation.plugin_directory_exists'),
                        ]);
                    }

                    $isAvailableUpdate = Arr::get($oldPluginContent, 'id') === $pluginContent['id']
                        && version_compare($pluginContent['version'], (string) Arr::get($oldPluginContent, 'version'), '>');

                    $updateToken = null;

                    if ($isAvailableUpdate) {
                        $keepFile = true;
                        $updateToken = Str::random(40);

                        // The token ties the confirm button to this exact upload, so a newer
                        // upload in another tab cannot be applied from an older comparison page.
                        session()->put(self::PENDING_UPDATE_SESSION_KEY, [
                            'file' => $storedName,
                            'id' => $pluginContent['id'],
                            'name' => $pluginName,
                            'token' => $updateToken,
                        ]);
                    }

                    return back()->with([
                        'isUpdate' => true,
                        'pluginContent' => $pluginContent,
                        'oldPluginContent' => $oldPluginContent,
                        'pluginName' => $pluginName,
                        'fileName' => $fileName,
                        'updateToken' => $updateToken,
                    ]);
                }

                $zipHandler->extractTo($zip, $prefix, $pluginPath);
            } finally {
                $zip->close();
            }
        } finally {
            if (! $keepFile) {
                File::delete($filePath);
            }
        }

        return back()->with([
            'isInstall' => true,
            'pluginContent' => $pluginContent,
            'pluginName' => $pluginName,
            'fileName' => $fileName,
        ]);
    }

    /**
     * Drop the archive of an update the user never confirmed, so tmp files do not pile up.
     */
    protected function discardPendingUpdate(PluginZipHandler $zipHandler): void
    {
        $pending = session()->pull(self::PENDING_UPDATE_SESSION_KEY);

        if ($path = $zipHandler->resolveStoredFile(Arr::get((array) $pending, 'file'))) {
            File::delete($path);
        }
    }
}
