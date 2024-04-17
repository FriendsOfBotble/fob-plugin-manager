<?php

namespace FriendsOfBotble\PluginManager\Http\Controllers;

use Botble\Base\Http\Controllers\BaseController;
use Botble\PluginManagement\Services\PluginService;
use FriendsOfBotble\PluginManager\Http\Requests\ReplacePluginRequest;
use Illuminate\Support\Facades\File;
use Illuminate\Validation\ValidationException;
use Throwable;
use ZipArchive;

class ReplaceCurrentPluginFromFileUploadedController extends BaseController
{
    public function __construct(protected PluginService $pluginService)
    {
    }

    public function __invoke(ReplacePluginRequest $request)
    {
        $filePath = $request->input('file_path');
        $pluginName = $request->input('name');

        if (! File::exists($filePath)) {
            return $this
                ->httpResponse()
                ->setError()
                ->setMessage(__('File not found.'));
        }

        try {
            $zip = new ZipArchive();

            $zip->open($filePath);
        } catch (Throwable) {
            tap(
                throw ValidationException::withMessages([
                    'zip_file' => __('This is not a valid zip file.'),
                ]),
                fn () => File::delete($filePath)
            );
        }

        File::delete(plugin_path($pluginName));

        $zip->extractTo(plugin_path($pluginName));

        $zip->close();

        File::delete($filePath);

        $this->pluginService->deactivate($pluginName);

        return view('plugins/plugin-manager::upload-plugin.install', [
            'pluginContent' => $this->pluginService->getPluginInfo($pluginName),
            'pluginName' => $pluginName,
            'fileName' => $request->input('file_name'),
            'fails' => [],
        ]);
    }
}
