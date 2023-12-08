<?php

namespace Botble\PluginManager\Events;

use Botble\ACL\Models\User;

class PluginRemoved
{
    public function __construct(public User $actor, public string $package)
    {
    }
}
