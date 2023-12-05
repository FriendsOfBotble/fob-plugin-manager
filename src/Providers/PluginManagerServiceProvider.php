<?php

namespace Datlechin\PluginManager\Providers;

use Botble\Base\Facades\DashboardMenu;
use Botble\Base\Supports\ServiceProvider;
use Botble\Base\Traits\LoadAndPublishDataTrait;
use Composer\Console\Application as Composer;
use Datlechin\PluginManager\ComposerAdapter;
use Datlechin\PluginManager\OutputLogger;
use Illuminate\Foundation\Application;
use Illuminate\Log\LogManager;
use Symfony\Component\Console\Output\BufferedOutput;

class PluginManagerServiceProvider extends ServiceProvider
{
    use LoadAndPublishDataTrait;

    public function register(): void
    {
        $this->app->singleton(ComposerAdapter::class, function (Application $app) {
            $composer = new Composer();
            $composer->setAutoExit(false);

            return new ComposerAdapter(
                $composer,
                $app->make(OutputLogger::class),
                new BufferedOutput()
            );
        });

        $this->app->bind(OutputLogger::class, function (Application $app) {
            return new OutputLogger($app->make(LogManager::class));
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
