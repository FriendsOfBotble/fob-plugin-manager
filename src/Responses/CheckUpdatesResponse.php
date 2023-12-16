<?php

namespace FriendsOfBotble\PluginManager\Responses;

use Carbon\Carbon;

class CheckUpdatesResponse extends Response
{
    public function __construct(protected Carbon $lastCheck, protected array $plugins)
    {
    }

    public function toArray(): array
    {
        return [
            'last_check' => $this->lastCheck->diffForHumans(),
            'plugins' => $this->plugins,
        ];
    }
}
