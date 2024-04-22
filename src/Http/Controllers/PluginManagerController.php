<?php

namespace FriendsOfBotble\PluginManager\Http\Controllers;

use Botble\Base\Facades\Assets;
use Botble\Base\Http\Controllers\BaseController;
use Carbon\Carbon;
use Illuminate\Contracts\View\View;

class PluginManagerController extends BaseController
{
    public function __invoke(): View
    {
        $this->pageTitle(__('Plugin Manager'));

        Assets::usingVueJS()->addScriptsDirectly('vendor/core/plugins/fob-plugin-manager/js/plugin-manager.js');

        $lastCheckUpdate = Carbon::parse(setting('plugin_manager.last_update_check'))->diffForHumans();

        return view('plugins/fob-plugin-manager::index', compact('lastCheckUpdate'));
    }
}
