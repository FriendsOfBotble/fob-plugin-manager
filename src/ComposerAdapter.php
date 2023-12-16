<?php

namespace FriendsOfBotble\PluginManager;

use Composer\Console\Application;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\BufferedOutput;

class ComposerAdapter
{
    public function __construct(
        protected Application $application,
        protected OutputLogger $logger,
        protected BufferedOutput $output
    ) {
    }

    public function run(InputInterface $input)
    {
        $this->application->resetComposer();

        $currDir = getcwd();
        chdir(app()->basePath());
        $exitCode = $this->application->run($input, $this->output);
        chdir($currDir);

        $output = $this->output->fetch();

        $this->logger->log($input->__toString(), $output, $exitCode);

        return new ComposerOutput($exitCode, $output);
    }
}
