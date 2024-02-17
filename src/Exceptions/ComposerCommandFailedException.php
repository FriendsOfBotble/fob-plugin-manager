<?php

namespace FriendsOfBotble\PluginManager\Exceptions;

use Exception;

class ComposerCommandFailedException extends Exception
{
    public array $details = [];

    public function __construct(public string $packageName, string $output)
    {
        parent::__construct($output);
    }

    public function guessCause(): ?string
    {
        return null;
    }

    protected function getRawPackageName(): string
    {
        return preg_replace('/^([A-z0-9-_\/]+)(?::.*|)$/i', '$1', $this->packageName);
    }
}
