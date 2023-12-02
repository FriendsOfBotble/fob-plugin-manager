<?php

namespace Datlechin\PluginManager\Http\Controllers;

use Botble\Base\Facades\Assets;
use Botble\Base\Http\Controllers\BaseController;
use Illuminate\Contracts\View\View;

class PluginManagerController extends BaseController
{
    public function __invoke(): View
    {
        $this->pageTitle(__('Plugin Manager'));

        Assets::usingVueJS()->addScriptsDirectly('vendor/core/plugins/plugin-manager/js/plugin-manager.js');

        return view('plugins/plugin-manager::index');
    }
}
