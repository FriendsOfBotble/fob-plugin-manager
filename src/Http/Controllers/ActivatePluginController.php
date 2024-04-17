<?php

namespace FriendsOfBotble\PluginManager\Http\Controllers;

use Botble\Base\Http\Controllers\BaseController;
use Botble\Base\Http\Responses\BaseHttpResponse;
use Botble\PluginManagement\Services\PluginService;
use FriendsOfBotble\PluginManager\Http\Requests\ActivatePluginRequest;

class ActivatePluginController extends BaseController
{
    public function __construct(protected PluginService $pluginService)
    {
    }

    public function __invoke(ActivatePluginRequest $request): BaseHttpResponse
    {
        $name = $request->input('name');

        $response = $this->pluginService->activate($name);

        if ($response['error']) {
            return $this
                ->httpResponse()
                ->setNextRoute('plugin-manager.upload-plugin.index')
                ->setError()
                ->setMessage($response['message']);
        }

        return $this
            ->httpResponse()
            ->setNextRoute('plugin-manager.upload-plugin.index')
            ->setMessage(__('Activate plugin successfully!'));
    }
}
