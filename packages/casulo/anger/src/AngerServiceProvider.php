<?php

namespace Casulo\Anger;

use Illuminate\Support\ServiceProvider;

class AngerServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        include __DIR__.'/routes.php';

    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        
        $this->loadViewsFrom(__DIR__.'/views', 'anger');
        $this->loadMigrationsFrom(__DIR__.'/migrations');
        $this->mergeConfigFrom(
            __DIR__.'/config/anger.php', 'anger'
        );



    }
}
