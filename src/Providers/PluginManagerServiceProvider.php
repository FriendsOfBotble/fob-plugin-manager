<?php

namespace Datlechin\PluginManager\Providers;

use Botble\Base\Facades\DashboardMenu;
use Botble\Base\Supports\ServiceProvider;
use Botble\Base\Traits\LoadAndPublishDataTrait;
use Composer\Console\Application;
use Datlechin\PluginManager\ComposerAdapter;

class PluginManagerServiceProvider extends ServiceProvider
{
    use LoadAndPublishDataTrait;

    public function register(): void
    {
        $this->app->singleton(ComposerAdapter::class, function () {
            $composer = new Application();
            $composer->setAutoExit(false);

            return new ComposerAdapter($composer);
        });
    }

    public function boot(): void
    {
        $this
            ->setNamespace('plugins/plugin-manager')
            ->loadRoutes()
            ->loadAndPublishViews();

        DashboardMenu::default()->beforeRetrieving(
            fn () => DashboardMenu::make()
                ->registerItem([
                    'id' => 'cms-plugins-plugin-manager',
                    'priority' => 999,
                    'name' => __('Plugin Manager'),
                    'icon' => 'ti ti-package',
                    'url' => fn () => route('plugin-manager.index'),
                ])
        );
    }
}
