<?php

use Botble\Base\Facades\AdminHelper;
use FriendsOfBotble\PluginManager\Http\Controllers\CheckForUpdatesController;
use FriendsOfBotble\PluginManager\Http\Controllers\PluginManagerController;
use FriendsOfBotble\PluginManager\Http\Controllers\RemoveFilePluginController;
use FriendsOfBotble\PluginManager\Http\Controllers\UpdatePluginFromFileUploadedController;
use FriendsOfBotble\PluginManager\Http\Controllers\RequirePluginController;
use FriendsOfBotble\PluginManager\Http\Controllers\UpdatePluginController;
use FriendsOfBotble\PluginManager\Http\Controllers\ActivatePluginController;
use FriendsOfBotble\PluginManager\Http\Controllers\UploadPluginFromZipController;
use Illuminate\Support\Facades\Route;

AdminHelper::registerRoutes(function () {
    Route::prefix('plugin-manager')->name('plugin-manager.')->group(function () {
        Route::get('/', PluginManagerController::class)->name('index');
        Route::post('check-for-updates', CheckForUpdatesController::class)->name('check-for-updates');
        Route::post('require-plugin', RequirePluginController::class)->name('require-plugin');
        Route::post('update-plugin', UpdatePluginController::class)->name('update-plugin');

        Route::get('upload-plugin', [UploadPluginFromZipController::class, 'index'])->name('upload-plugin.index');
        Route::post('upload-plugin', [UploadPluginFromZipController::class, 'store'])->name('upload-plugin.store');
        Route::post('activate-plugin', [ActivatePluginController::class, '__invoke'])->name('activate-plugin');
        Route::post('update-plugin', [UpdatePluginFromFileUploadedController::class, '__invoke'])->name('update-plugin');
        Route::get('remove-file-plugin', [RemoveFilePluginController::class, '__invoke'])->name('remove-file-plugin');
    });
});
