<?php

namespace FriendsOfBotble\PluginManager;

class ComposerOutput
{
    public function __construct(
        protected int $exitCode,
        protected string $output
    ) {
    }

    public function getExitCode(): int
    {
        return $this->exitCode;
    }

    public function getOutput(): string
    {
        return $this->output;
    }
}
