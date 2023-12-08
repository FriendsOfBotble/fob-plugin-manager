<?php

namespace Botble\PluginManager\Events;

use Botble\ACL\Models\User;

class PluginInstalled
{
    public function __construct(public User $actor, public string $package)
    {
    }
}
