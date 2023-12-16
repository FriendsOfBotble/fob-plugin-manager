<?php

namespace FriendsOfBotble\PluginManager\Enums;

enum TaskOperation: string
{
    case PluginInstall = 'plugin_install';

    case PluginUpdate = 'plugin_update';

    case PluginRemove = 'plugin_remove';

    case UpdateCheck = 'update_check';

    case WhyNot = 'why_not';
}
