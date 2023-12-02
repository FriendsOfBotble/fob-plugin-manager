<?php

use Botble\Base\Facades\AdminHelper;
use Datlechin\PluginManager\Http\Controllers\CheckForUpdatesController;
use Datlechin\PluginManager\Http\Controllers\PluginManagerController;
use Datlechin\PluginManager\Http\Controllers\RequirePluginController;
use Datlechin\PluginManager\Http\Controllers\UpdatePluginController;
use Illuminate\Support\Facades\Route;

AdminHelper::registerRoutes(function () {
    Route::prefix('plugin-manager')->name('plugin-manager.')->group(function () {
        Route::get('/', PluginManagerController::class)->name('index');
        Route::post('check-for-updates', CheckForUpdatesController::class)->name('check-for-updates');
        Route::post('require-plugin', RequirePluginController::class)->name('require-plugin');
        Route::post('update-plugin', UpdatePluginController::class)->name('update-plugin');
    });
});
