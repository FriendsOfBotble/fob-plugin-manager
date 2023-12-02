<?php

namespace Datlechin\PluginManager\Http\Controllers;

use Botble\Base\Http\Controllers\BaseController;
use Datlechin\PluginManager\ComposerAdapter;
use Datlechin\PluginManager\Http\Requests\UpdatePluginRequest;
use Symfony\Component\Console\Input\StringInput;

class UpdatePluginController extends BaseController
{
    public function __invoke(UpdatePluginRequest $request, ComposerAdapter $composer)
    {
        $name = $request->input('name');

        $result = $composer->run(new StringInput("update $name"));

        if ($result->getExitCode() !== 0) {
            return $this
                ->httpResponse()
                ->setError()
                ->setMessage($result->getOutput());
        }

        return $this->httpResponse();
    }
}
