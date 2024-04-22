<?php

namespace FriendsOfBotble\PluginManager\Providers;

use Botble\Base\Facades\DashboardMenu;
use Botble\Base\Supports\ServiceProvider;
use Botble\Base\Traits\LoadAndPublishDataTrait;

class PluginManagerServiceProvider extends ServiceProvider
{
    use LoadAndPublishDataTrait;

     public function register(): void
     {
         $this
             ->setNamespace('plugins/fob-plugin-manager')
             ->loadAndPublishConfigurations(['plugin-manager']);

    //     if (! class_exists(Composer::class)) {
    //         require_once __DIR__ . '../../../vendor/autoload.php';
    //     }

    //     $this->app->singleton(ComposerAdapter::class, function (Application $app) {
    //         $composer = new Composer();
    //         $composer->setAutoExit(false);

    //         putenv(sprintf('COMPOSER_HOME=%s', storage_path('.composer')));
    //         putenv(sprintf('COMPOSER=%s', base_path('composer.json')));

    //         @ini_set('memory_limit', '1G');
    //         @set_time_limit(0);

    //         return new ComposerAdapter(
    //             $composer,
    //             $app->make(OutputLogger::class),
    //             new BufferedOutput()
    //         );
    //     });

    //     $this->app->bind(
    //         OutputLogger::class,
    //         fn (Application $app) => new OutputLogger($app->make(LogManager::class))
    //     );
     }

    public function boot(): void
    {
        if (! config('plugins.fob-plugin-manager.plugin-manager.enabled', false)) {
            return;
        }

        $this
            ->loadRoutes()
            ->publishAssets()
            ->loadMigrations()
            ->loadAndPublishViews()
            ->loadAndPublishTranslations();

        DashboardMenu::default()->beforeRetrieving(
            fn () => DashboardMenu::make()
                ->registerItem([
                    'parent_id' => 'cms-core-plugins',
                    'id' => 'cms-plugins-plugin-manager-upload-plugin-from-zip',
                    'priority' => 3,
                    'name' => trans('plugins/fob-plugin-manager::plugin-manager.plugin_upload.menu'),
                    'url' => fn () => route('plugin-manager.upload-plugin.index'),
                ])
        );

        $this->app->booted(function () {
            add_filter('plugin_management_installed_header_actions', function (?string $html): ?string {
                return $html . view('plugins/fob-plugin-manager::partials.upload-plugin-button')->render();
            });
        });
    }
}
