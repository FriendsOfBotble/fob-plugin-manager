<?php

namespace Datlechin\PluginManager\Http\Controllers;

use Botble\Base\Http\Controllers\BaseController;
use Botble\Base\Http\Responses\BaseHttpResponse;
use Datlechin\PluginManager\Actions\UpdatePlugin;
use Datlechin\PluginManager\ComposerAdapter;
use Datlechin\PluginManager\Exceptions\ComposerUpdateFailedException;
use Datlechin\PluginManager\Http\Requests\UpdatePluginRequest;
use Symfony\Component\Console\Input\StringInput;

class UpdatePluginController extends BaseController
{
    public function __invoke(UpdatePluginRequest $request, UpdatePlugin $updatePlugin): BaseHttpResponse
    {
        try {
            $updatePlugin($request->input('name'));

            return $this
                ->httpResponse()
                ->setMessage(__('Plugin has been updated successfully.'));
        } catch (ComposerUpdateFailedException) {
            return $this
                ->httpResponse()
                ->setError()
                ->setMessage(__('Failed to execute, please check the composer logs in the storage/logs folder.'));
        }
    }
}
