<?php

namespace FriendsOfBotble\PluginManager\Http\Requests;

use Botble\Support\Http\Requests\Request;

class UpdatePluginRequest extends Request
{
    public function rules(): array
    {
        return [
            'name' => ['required', 'string'],
            'file_path' => ['required', 'string'],
            'file_name' => ['required', 'string'],
        ];
    }
}
