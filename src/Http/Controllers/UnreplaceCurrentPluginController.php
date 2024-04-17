<?php

namespace FriendsOfBotble\PluginManager\Http\Controllers;

use Botble\Base\Http\Controllers\BaseController;
use Botble\Base\Http\Responses\BaseHttpResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class UnReplaceCurrentPluginController extends BaseController
{
    public function __invoke(Request $request): BaseHttpResponse
    {
        if ($filePath = $request->input('file_path')) {
            File::delete($filePath);
        }

        return $this
            ->httpResponse()
            ->setNextRoute('plugin-manager.upload-plugin.index');
    }
}
