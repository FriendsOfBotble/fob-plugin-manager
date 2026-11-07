<?php

namespace FriendsOfBotble\PluginManager\Providers;

use Botble\Base\Facades\DashboardMenu;
use Botble\Base\Supports\ServiceProvider;
use Botble\Base\Traits\LoadAndPublishDataTrait;
use FriendsOfBotble\PluginManager\Http\Middleware\EnsurePluginUploadIsAllowed;

class PluginManagerServiceProvider extends ServiceProvider
{
    use LoadAndPublishDataTrait;

    public function register(): void
    {
        $this
            ->setNamespace('plugins/fob-plugin-manager')
            ->loadAndPublishConfigurations(['plugin-manager']);
    }

    public function boot(): void
    {
        $this
            ->loadRoutes()
            ->loadAndPublishViews()
            ->loadAndPublishTranslations();

        DashboardMenu::default()->beforeRetrieving(
            fn () => DashboardMenu::make()
                ->registerItem([
                    'parent_id' => 'cms-core-plugins',
                    'id' => 'cms-plugins-plugin-manager-upload-plugin-from-zip',
                    'priority' => 3,
                    'name' => trans('plugins/fob-plugin-manager::plugin-manager.plugin_upload.menu'),
                    'icon' => 'ti ti-file-zip',
                    'url' => fn () => route('plugin-manager.upload-plugin.index'),
                ])
        );

        if (EnsurePluginUploadIsAllowed::isEnabled()) {
            $this->app->booted(function () {
                add_filter('plugin_management_installed_header_actions', function (?string $html): ?string {
                    if (! EnsurePluginUploadIsAllowed::allows(auth()->user())) {
                        return $html;
                    }

                    return $html . view('plugins/fob-plugin-manager::partials.upload-plugin-button')->render();
                });
            });
        }
    }
}
