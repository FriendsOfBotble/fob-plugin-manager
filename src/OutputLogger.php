<?php

namespace FriendsOfBotble\PluginManager;

use Psr\Log\LoggerInterface;

class OutputLogger
{
    public function __construct(protected LoggerInterface $logger)
    {
    }

    public function log(string $input, string $output, int $exitCode): void
    {
        $content = sprintf(
            "Input: %s\nOutput: %s\nExit code: %d\n",
            $input,
            $output,
            $exitCode
        );

        if ($exitCode === 0) {
            $this->logger->info($content);
        } else {
            $this->logger->error($content);
        }
    }
}
