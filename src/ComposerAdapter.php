<?php

namespace Datlechin\PluginManager;

use Composer\Console\Application;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\BufferedOutput;

class ComposerAdapter
{
    protected BufferedOutput $output;

    public function __construct(protected Application $application)
    {
        $this->output = new BufferedOutput();
    }

    public function run(InputInterface $input)
    {
        $this->application->resetComposer();

        $currDir = getcwd();
        chdir(app()->basePath());
        $exitCode = $this->application->run($input, $this->output);
        chdir($currDir);

        $output = $this->output->fetch();

        return new ComposerOutput($exitCode, $output);
    }
}
