<?php

namespace Datlechin\PluginManager\Http\Requests;

use Botble\Support\Http\Requests\Request;

class UpdatePluginRequest extends Request
{
    public function rules(): array
    {
        return [
            'name' => ['required', 'string'],
        ];
    }
}
