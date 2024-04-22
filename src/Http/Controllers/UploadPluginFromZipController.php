<?php

namespace FriendsOfBotble\PluginManager\Http\Controllers;

use Botble\Base\Facades\BaseHelper;
use Botble\Base\Http\Controllers\BaseController;
use Botble\Base\Supports\Breadcrumb;
use Botble\PluginManagement\Services\PluginService;
use FriendsOfBotble\PluginManager\Http\Requests\UploadFilePluginRequest;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use Illuminate\Validation\ValidationException;
use Throwable;
use ZipArchive;

class UploadPluginFromZipController extends BaseController
{
    protected function breadcrumb(): Breadcrumb
    {
        return parent::breadcrumb()
            ->add(trans('packages/plugin-management::plugin.plugins'), route('plugins.index'));
    }

    public function index(): View
    {
        $this->pageTitle(trans('plugins/fob-plugin-manager::plugin-manager.plugin_upload.title'));

        return view('plugins/fob-plugin-manager::uploader');
    }

    public function store(UploadFilePluginRequest $request, PluginService $pluginService)
    {
        $this->pageTitle(trans('plugins/fob-plugin-manager::plugin-manager.plugin_upload.upload_plugin'));

        $zipFile = $request->file('file');
        $zipFile->move(storage_path('app/tmp'), $zipFileName = $zipFile->hashName() . '.zip');
        $filePath = storage_path('app/tmp/' . $zipFileName);

        try {
            $zip = new ZipArchive();

            $zip->open($filePath);

            $pluginContent = $zip->getFromName('plugin.json');
        } catch (Throwable) {
            tap(
                throw ValidationException::withMessages([
                    'zip_file' => trans('plugins/fob-plugin-manager::plugin-manager.plugin_upload.validation.could_not_find_plugin_file'),
                ]),
                fn () => File::delete($filePath)
            );
        }

        $zipFileName = pathinfo($fileName = $zipFile->getClientOriginalName(), PATHINFO_FILENAME);

        if (! $pluginContent) {
            $pluginContent = $zip->getFromName($zipFileName . '/' . 'plugin.json');
        }

        if (! $pluginContent) {
            throw ValidationException::withMessages([
                'zip_file' => trans('plugins/fob-plugin-manager::plugin-manager.plugin_upload.validation.could_not_find_plugin_file'),
            ]);
        }

        $readmeContent = null;

        $readmePatterns = [
            'README.md',
            'readme.md',
            'Readme.md',
            'ReadMe.md',
            'README.txt',
            'readme.txt',
            'Readme.txt',
            'ReadMe.txt',
        ];

        foreach ($readmePatterns as $file) {
            if ($readmeContent) {
                break;
            }

            $readmeContent = $zip->getFromName($file);

            if (! $readmeContent) {
                $readmeContent = $zip->getFromName($zipFileName . '/' . $file);
            }
        }

        $pluginContent = json_decode($pluginContent, true);

        if (! $pluginContent) {
            throw ValidationException::withMessages([
                'zip_file' => trans('plugins/fob-plugin-manager::plugin-manager.plugin_upload.validation.invalid_plugin_file'),
            ]);
        }

        $validator = Validator::make($pluginContent, [
            'id' => ['required', 'string', 'regex:/^[a-zA-Z0-9-_]+\/[a-zA-Z0-9-_]+$/'],
            'name' => ['required', 'string'],
            'namespace' => ['required', 'string'],
            'provider' => ['required', 'string'],
            'author' => ['required', 'string'],
            'url' => ['nullable', 'url'],
            'version' => ['required', 'string'],
            'description' => ['nullable', 'string'],
            'minimum_core_version' => ['nullable', 'string', 'regex:/^[0-9]+\.[0-9]+\.[0-9]+$/'],
        ]);

        if ($validator->fails()) {
            File::delete($filePath);

            throw ValidationException::withMessages($validator->errors()->all());
        }

        $minimumCoreVersion = Arr::get($pluginContent, 'minimum_core_version');
        $coreVersion = get_core_version();

        if ($minimumCoreVersion && (version_compare($coreVersion, $minimumCoreVersion, '<'))) {
            return $this
                ->httpResponse()
                ->setError()
                ->setMessage(trans('packages/plugin-management::plugin.minimum_core_version_not_met', [
                    'plugin' => $pluginContent['name'],
                    'minimum_core_version' => $minimumCoreVersion,
                    'current_core_version' => $coreVersion,
                ]));
        }

        $pluginName = Str::afterLast($pluginContent['id'], '/');

        $plugins = BaseHelper::scanFolder(plugin_path());

        if (
            in_array($pluginName, array_values($plugins))
            && ($oldPluginContent = $pluginService->getPluginInfo($pluginName))
        ) {
            if ($oldPluginContent['id'] !== $pluginContent['id']) {
                File::delete($filePath);
            }

            return back()->with([
                'isUpdate' => true,
                'pluginContent' => $pluginContent,
                'oldPluginContent' => $oldPluginContent,
                'pluginName' => $pluginName,
                'fileName' => $fileName,
                'filePath' => $filePath,
            ]);
        }

        $zip->extractTo(plugin_path($pluginName));

        $zip->close();

        File::delete($filePath);

        return back()->with([
            'isInstall' => true,
            'pluginContent' => $pluginContent,
            'pluginName' => $pluginName,
            'fileName' => $fileName,
        ]);
    }
}
