<?php

namespace FriendsOfBotble\PluginManager\Providers;

use Botble\Base\Facades\DashboardMenu;
use Botble\Base\Supports\ServiceProvider;
use Botble\Base\Traits\LoadAndPublishDataTrait;
use Composer\Console\Application as Composer;
use FriendsOfBotble\PluginManager\ComposerAdapter;
use FriendsOfBotble\PluginManager\OutputLogger;
use Illuminate\Foundation\Application;
use Illuminate\Log\LogManager;
use Symfony\Component\Console\Output\BufferedOutput;

class PluginManagerServiceProvider extends ServiceProvider
{
    use LoadAndPublishDataTrait;

    public function register(): void
    {
        if (! class_exists(Composer::class)) {
            require_once __DIR__ . '../../../vendor/autoload.php';
        }

        $this->app->singleton(ComposerAdapter::class, function (Application $app) {
            $composer = new Composer();
            $composer->setAutoExit(false);

            putenv(sprintf('COMPOSER_HOME=%s', storage_path('.composer')));
            putenv(sprintf('COMPOSER=%s', base_path('composer.json')));

            @ini_set('memory_limit', '1G');
            @set_time_limit(0);

            return new ComposerAdapter(
                $composer,
                $app->make(OutputLogger::class),
                new BufferedOutput()
            );
        });

        $this->app->bind(
            OutputLogger::class,
            fn (Application $app) => new OutputLogger($app->make(LogManager::class))
        );
    }

    public function boot(): void
    {
        $this
            ->setNamespace('plugins/plugin-manager')
            ->loadRoutes()
            ->publishAssets()
            ->loadMigrations()
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
                ->registerItem([
                    'parent_id' => 'cms-plugins-plugin-manager',
                    'id' => 'cms-plugins-plugin-manager-upload-plugin-from-zip',
                    'priority' => 1,
                    'name' => __('Upload Plugin From Zip'),
                    'icon' => 'ti ti-file-upload',
                    'url' => fn () => route('plugin-manager.upload-plugin.index'),
                ])
        );
    }
}
