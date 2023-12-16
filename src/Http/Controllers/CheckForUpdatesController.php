<?php

namespace FriendsOfBotble\PluginManager\Http\Controllers;

use Botble\Base\Http\Controllers\BaseController;
use Botble\Base\Http\Responses\BaseHttpResponse;
use FriendsOfBotble\PluginManager\Actions\CheckForUpdates;
use FriendsOfBotble\PluginManager\Exceptions\ComposerCheckForUpdatesFailedException;

class CheckForUpdatesController extends BaseController
{
    public function __invoke(CheckForUpdates $checkForUpdates): BaseHttpResponse
    {
        try {
            $result = $checkForUpdates();

            return $this
                ->httpResponse()
                ->setData($result->toArray());
        } catch (ComposerCheckForUpdatesFailedException) {
            return $this
                ->httpResponse()
                ->setError()
                ->setMessage(__('Failed to execute, please check the composer logs in the storage/logs folder.'));
        }
    }
}
