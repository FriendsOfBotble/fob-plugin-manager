<?php

namespace FriendsOfBotble\PluginManager\Http\Middleware;

use Closure;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Http\Request;

/**
 * Guards the routes that write plugin code to disk. Uploading a plugin runs
 * arbitrary PHP, so it needs FOB_PLUGIN_MANAGER_ENABLED=true and a super user.
 */
class EnsurePluginUploadIsAllowed
{
    public static function isEnabled(): bool
    {
        return (bool) config('plugins.fob-plugin-manager.plugin-manager.enabled', false);
    }

    public static function allows(?Authenticatable $user): bool
    {
        return self::isEnabled()
            && $user
            && method_exists($user, 'isSuperUser')
            && $user->isSuperUser();
    }

    public function handle(Request $request, Closure $next)
    {
        abort_unless(self::allows($request->user()), 403);

        return $next($request);
    }
}
