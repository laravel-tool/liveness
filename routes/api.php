<?php

use LaravelTool\Liveness\Http\Controllers;
use Illuminate\Support\Facades\Route;

Route::middleware(config('liveness.middleware'))
    ->prefix(config('liveness.prefix'))
    ->group(function () {
        Route::get('ping', Controllers\PingController::class);
    });
