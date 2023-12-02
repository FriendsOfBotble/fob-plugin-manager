<?php

namespace Datlechin\PluginManager\Http\Controllers;

use Botble\Base\Http\Controllers\BaseController;
use Datlechin\PluginManager\ComposerAdapter;
use Symfony\Component\Console\Input\ArrayInput;

class CheckForUpdatesController extends BaseController
{
    public function __invoke(ComposerAdapter $composer)
    {
        $result = $composer->run(new ArrayInput([
            'command' => 'outdated',
            '--direct' => true,
            '--format' => 'json',
        ]));

        if ($result->getExitCode() !== 0) {
            return $this
                ->httpResponse()
                ->setError()
                ->setMessage($result->getOutput());
        }

        return $this
            ->httpResponse()
            ->setData($result->getOutput());
    }
}
