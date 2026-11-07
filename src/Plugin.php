<?php

namespace FriendsOfBotble\PluginManager;

use Botble\PluginManagement\Abstracts\PluginOperationAbstract;
use Illuminate\Support\Facades\Schema;

class Plugin extends PluginOperationAbstract
{
    public static function remove(): void
    {
        // Created by versions before 1.0.3 (removed Composer installer); clean it up on uninstall.
        Schema::dropIfExists('plugin_manager_tasks');
    }
}
