<?php

namespace Datlechin\PluginManager\Actions;

use Datlechin\PluginManager\ComposerAdapter;
use Datlechin\PluginManager\Exceptions\ComposerRequireFailedException;
use Symfony\Component\Console\Input\StringInput;

class RequirePlugin
{
    public function __construct(protected ComposerAdapter $composer)
    {
    }

    public function __invoke(string $name): void
    {
        if (! str_contains($name, ':')) {
            $name .= ':*';
        }

        $result = $this->composer->run(new StringInput("require $name"));

        if ($result->getExitCode() !== 0) {
            throw new ComposerRequireFailedException($result->getOutput());
        }
    }
}
