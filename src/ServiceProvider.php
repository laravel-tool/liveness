<?php

namespace LaravelTool\Liveness;

use Illuminate\Contracts\Support\DeferrableProvider;
use Illuminate\Support\ServiceProvider as BaseServiceProvider;

class ServiceProvider extends BaseServiceProvider
{
    public function register(): void
    {
        $this->mergeConfigFrom(__DIR__.'/../config/liveness.php', 'liveness');
    }

    public function boot(): void
    {
        $this->registerPublishes();
        $this->loadRoutesFrom(__DIR__.'/../routes/api.php');
    }

    protected function registerPublishes(): void
    {
        if (!$this->app->runningInConsole()) {
            return;
        }

        $this->publishes([
            __DIR__.'/../config/liveness.php' => config_path('liveness.php'),
        ], 'config');
    }
}
