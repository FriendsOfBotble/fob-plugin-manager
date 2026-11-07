<?php

use Botble\Base\Facades\AdminHelper;
use FriendsOfBotble\PluginManager\Http\Controllers\UpdatePluginFromFileUploadedController;
use FriendsOfBotble\PluginManager\Http\Controllers\UploadPluginFromZipController;
use FriendsOfBotble\PluginManager\Http\Middleware\EnsurePluginUploadIsAllowed;
use Illuminate\Support\Facades\Route;

AdminHelper::registerRoutes(function () {
    Route::prefix('plugins')->name('plugin-manager.')->group(function () {
        // The index stays reachable so it can explain how to enable the feature.
        Route::get('upload-plugin', [UploadPluginFromZipController::class, 'index'])->name('upload-plugin.index');

        Route::middleware(EnsurePluginUploadIsAllowed::class)->group(function () {
            Route::post('upload-plugin', [UploadPluginFromZipController::class, 'store'])->name('upload-plugin.store');
            Route::post('update-plugin', [UpdatePluginFromFileUploadedController::class, '__invoke'])->name('update-plugin');
        });
    });
});
