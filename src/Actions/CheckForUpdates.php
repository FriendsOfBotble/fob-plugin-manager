<?php

namespace FriendsOfBotble\PluginManager\Actions;

use Botble\Setting\Facades\Setting;
use Carbon\Carbon;
use FriendsOfBotble\PluginManager\ComposerAdapter;
use FriendsOfBotble\PluginManager\Exceptions\ComposerCheckForUpdatesFailedException;
use FriendsOfBotble\PluginManager\Responses\CheckUpdatesResponse;
use Illuminate\Support\Arr;
use Symfony\Component\Console\Input\ArrayInput;

class CheckForUpdates
{
    public function __construct(protected ComposerAdapter $composer)
    {
    }

    public function __invoke(): CheckUpdatesResponse
    {
        $result = $this->composer->run(new ArrayInput([
            'command' => 'outdated',
            '--direct' => true,
            '--format' => 'json',
        ]));

        if ($result->getExitCode() !== 0) {
            throw new ComposerCheckForUpdatesFailedException($result->getOutput());
        }

        Setting::set('plugin_manager.last_update_check', Carbon::now());
        Setting::save();

        return new CheckUpdatesResponse(
            lastCheck: Carbon::now(),
            plugins: Arr::get(json_decode($result->getOutput(), true), 'installed', []),
        );
    }
}
