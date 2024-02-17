<?php

namespace FriendsOfBotble\PluginManager\Http\Controllers;

use Botble\Base\Http\Controllers\BaseController;
use Botble\Base\Http\Responses\BaseHttpResponse;
use FriendsOfBotble\PluginManager\Actions\RequirePlugin;
use FriendsOfBotble\PluginManager\Exceptions\ComposerRequireFailedException;
use FriendsOfBotble\PluginManager\Http\Requests\RequirePluginRequest;

class RequirePluginController extends BaseController
{
    public function __invoke(RequirePluginRequest $request, RequirePlugin $requirePlugin): BaseHttpResponse
    {
        try {
            $requirePlugin($request->input('name'));

            return $this
                ->httpResponse()
                ->setMessage(__('Plugin has been installed successfully.'));
        } catch (ComposerRequireFailedException $e) {
            return $this
                ->httpResponse()
                ->setError()
                ->setMessage($e->guessCause());
        }
    }
}
