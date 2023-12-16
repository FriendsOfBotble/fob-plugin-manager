<?php

namespace FriendsOfBotble\PluginManager\Http\Requests;

use Botble\Support\Http\Requests\Request;

class RequirePluginRequest extends Request
{
    protected const PLUGIN_NAME_REGEX = '/^[A-z0-9-_]+\/[A-z-0-9]+(?::[A-z-0-9.->=<_]+){0,1}$/i';

    public function rules(): array
    {
        return [
            'name' => ['required', 'string', 'regex:' . self::PLUGIN_NAME_REGEX],
        ];
    }
}
