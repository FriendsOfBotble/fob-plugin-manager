<?php

namespace Datlechin\PluginManager\Http\Controllers;

use Botble\Base\Http\Controllers\BaseController;
use Datlechin\PluginManager\ComposerAdapter;
use Datlechin\PluginManager\Http\Requests\RequirePluginRequest;
use Symfony\Component\Console\Input\StringInput;

class RequirePluginController extends BaseController
{
    public function __invoke(RequirePluginRequest $request, ComposerAdapter $composer)
    {
        $name = $request->input('name');

        if (! str_contains($name, ':')) {
            $name .= ':*';
        }

        $result = $composer->run(new StringInput("require $name"));

        if ($result->getExitCode() !== 0) {
            return $this
                ->httpResponse()
                ->setError()
                ->setMessage($result->getOutput());
        }

        return $this->httpResponse();
    }
}
