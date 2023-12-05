<?php

namespace Datlechin\PluginManager\Actions;

use Datlechin\PluginManager\ComposerAdapter;
use Datlechin\PluginManager\Exceptions\ComposerCheckForUpdatesFailedException;
use Symfony\Component\Console\Input\ArrayInput;

class CheckForUpdates
{
    public function __construct(protected ComposerAdapter $composer)
    {
    }

    public function __invoke(): string
    {
        $result = $this->composer->run(new ArrayInput([
            'command' => 'outdated',
            '--direct' => true,
            '--format' => 'json',
        ]));

        if ($result->getExitCode() !== 0) {
            throw new ComposerCheckForUpdatesFailedException($result->getOutput());
        }

        return $result->getOutput();
    }
}
