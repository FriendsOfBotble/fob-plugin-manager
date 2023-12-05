<?php

namespace Datlechin\PluginManager\Actions;

use Datlechin\PluginManager\ComposerAdapter;
use Datlechin\PluginManager\Exceptions\ComposerUpdateFailedException;
use Symfony\Component\Console\Input\StringInput;

class UpdatePlugin
{
    public function __construct(protected ComposerAdapter $composer)
    {
    }

    public function __invoke(string $name): void
    {
        $result = $this->composer->run(new StringInput("update $name"));

        if ($result->getExitCode() !== 0) {
            throw new ComposerUpdateFailedException($result->getOutput());
        }
    }
}
