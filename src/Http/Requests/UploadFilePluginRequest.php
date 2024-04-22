<?php

namespace FriendsOfBotble\PluginManager\Http\Requests;

use Botble\Support\Http\Requests\Request;

class UploadFilePluginRequest extends Request
{
    public function rules(): array
    {
        return [
            'file' => ['required', 'file', 'mimes:zip', 'max:2048'],
        ];
    }
}
