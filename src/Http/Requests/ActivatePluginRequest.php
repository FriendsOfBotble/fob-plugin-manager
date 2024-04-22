<?php

namespace FriendsOfBotble\PluginManager\Http\Requests;

use Botble\Support\Http\Requests\Request;

class ActivatePluginRequest extends Request
{
    public function rules(): array
    {
        return [
            'name' => ['required', 'string'],
        ];
    }
}
