<?php

namespace FriendsOfBotble\PluginManager\Http\Controllers;

use Botble\Base\Facades\BaseHelper;
use Botble\Base\Http\Controllers\BaseController;
use Botble\PluginManagement\Services\PluginService;
use FriendsOfBotble\PluginManager\Http\Requests\UploadFilePluginRequest;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use Illuminate\Validation\ValidationException;
use Throwable;
use ZipArchive;

class UploadPluginFromZipController extends BaseController
{
    public function __construct(protected PluginService $pluginService)
    {
    }

    public function index(): View
    {
        $this->pageTitle(trans('plugins/plugin-manager::plugin-manager.plugin_upload.title'));

        return view('plugins/plugin-manager::uploader');
    }

    public function store(UploadFilePluginRequest $request): View
    {
        $this->pageTitle(trans('plugins/plugin-manager::plugin-manager.plugin_upload.upload_plugin'));

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
                    'zip_file' => __('This is not a valid zip file.'),
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
                'zip_file' => __('Could not find [plugin.json] file in your zip file.'),
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

        $fails = [];

        if ($validator->fails()) {
            $fails = $validator->errors()->all();
            File::delete($filePath);

            session()->regenerate();

            return view(
                'plugins/plugin-manager::installing',
                compact('fails', 'fileName')
            );
        }

        $pluginName = Str::afterLast($pluginContent['id'], '/');

        $plugins = BaseHelper::scanFolder(plugin_path());

        if (
            in_array($pluginName, array_values($plugins))
            && ($oldPluginContent = $this->pluginService->getPluginInfo($pluginName))
        ) {
            if ($oldPluginContent['id'] !== $pluginContent['id']) {
                File::delete($filePath);
            }

            session()->regenerate();

            return view(
                'plugins/plugin-manager::updating',
                compact('pluginContent', 'oldPluginContent', 'fails', 'pluginName', 'fileName', 'filePath')
            );
        }

        $zip->extractTo(plugin_path($pluginName));

        $zip->close();

        File::delete($filePath);

        session()->regenerate();

        return view('plugins/plugin-manager::installing', compact('pluginContent', 'fails', 'fileName', 'pluginName'));
    }
}
