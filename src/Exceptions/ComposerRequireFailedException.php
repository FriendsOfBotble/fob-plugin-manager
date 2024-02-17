<?php

namespace FriendsOfBotble\PluginManager\Exceptions;

class ComposerRequireFailedException extends ComposerCommandFailedException
{
    protected const INCOMPATIBLE_REGEX = '/(?:(?: +- {PACKAGE_NAME}(?: v[0-9A-z.-]+ requires|\[[^\[\]]+\] require))|(?:Could not find a version of package {PACKAGE_NAME} matching your minim)|(?: +- Root composer\.json requires {PACKAGE_NAME} [^,]+, found {PACKAGE_NAME}\[[^\[\]]+\]+ but it does not match your minimum-stability))/m';

    protected const NOT_FOUND_REGEX = '/(?:(?: +- Root composer\.json requires {PACKAGE_NAME}, it could not be found in any version, there may be a typo in the package name.))/m';

    public function guessCause(): ?string
    {
        $hasIncompatibleMatches = preg_match(
            str_replace('{PACKAGE_NAME}', preg_quote($this->getRawPackageName(), '/'), self::INCOMPATIBLE_REGEX),
            $this->getMessage(),
            $matches
        );

        if ($hasIncompatibleMatches) {
            return __('The plugin is not compatible with the current version of Botble.');
        }

        $hasNotFoundMatches = preg_match(
            str_replace('{PACKAGE_NAME}', preg_quote($this->getRawPackageName(), '/'), self::NOT_FOUND_REGEX),
            $this->getMessage(),
            $matches
        );

        if ($hasNotFoundMatches) {
            return __('The plugin was not found or does not exist.');
        }

        return null;
    }
}
