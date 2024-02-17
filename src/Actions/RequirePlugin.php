<?php

namespace FriendsOfBotble\PluginManager\Actions;

use FriendsOfBotble\PluginManager\ComposerAdapter;
use FriendsOfBotble\PluginManager\Exceptions\ComposerRequireFailedException;
use Symfony\Component\Console\Input\StringInput;

class RequirePlugin
{
    public function __construct(protected ComposerAdapter $composer)
    {
    }

    public function __invoke(string $packageName): void
    {
        if (! str_contains($packageName, ':')) {
            $packageName .= ':*';
        }

        $result = $this->composer->run(new StringInput("require $packageName"));

        if ($result->getExitCode() !== 0) {
            throw new ComposerRequireFailedException($packageName, $result->getOutput());
        }
    }
}
