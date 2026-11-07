<?php

namespace FriendsOfBotble\PluginManager\Http\Controllers;

use Botble\Base\Http\Controllers\BaseController;
use Botble\Base\Http\Responses\BaseHttpResponse;
use Botble\PluginManagement\Services\PluginService;
use FriendsOfBotble\PluginManager\Services\PluginZipHandler;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\File;
use Illuminate\Validation\ValidationException;

class UpdatePluginFromFileUploadedController extends BaseController
{
    public function __construct(protected PluginService $pluginService)
    {
    }

    /**
     * Apply the update confirmed on the upload page. The archive and target plugin
     * come from the session written by UploadPluginFromZipController, never from
     * request input, and are re-validated against the archive's own plugin.json.
     */
    public function __invoke(Request $request, PluginZipHandler $zipHandler): BaseHttpResponse
    {
        $pending = (array) session()->pull(UploadPluginFromZipController::PENDING_UPDATE_SESSION_KEY);
        $filePath = $zipHandler->resolveStoredFile(Arr::get($pending, 'file'));

        $expectedToken = (string) Arr::get($pending, 'token');

        if ($filePath && ($expectedToken === '' || ! hash_equals($expectedToken, (string) $request->input('token')))) {
            File::delete($filePath);
            $filePath = null;
        }

        if (! $filePath) {
            return $this
                ->httpResponse()
                ->setError()
                ->setMessage(__('File not found.'));
        }

        try {
            $zip = $zipHandler->open($filePath);

            try {
                [$prefix, $pluginContent, $pluginName] = $zipHandler->readPluginManifest($zip);

                $oldPluginContent = $this->pluginService->getPluginInfo($pluginName);

                if (
                    $pluginContent['id'] !== Arr::get($pending, 'id')
                    || $pluginName !== Arr::get($pending, 'name')
                    || Arr::get($oldPluginContent, 'id') !== $pluginContent['id']
                ) {
                    throw ValidationException::withMessages([
                        'file' => trans('plugins/fob-plugin-manager::plugin-manager.plugin_upload.plugin_id_conflict'),
                    ]);
                }

                $zipHandler->replace($zip, $prefix, plugin_path($pluginName));
            } finally {
                $zip->close();
            }
        } finally {
            File::delete($filePath);
        }

        return $this
            ->httpResponse()
            ->setNextRoute('plugins.index')
            ->withUpdatedSuccessMessage();
    }
}
