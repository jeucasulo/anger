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

        $this->loadViewsFrom(__DIR__.'/views', 'anger');
        $this->loadMigrationsFrom(__DIR__.'/migrations');


        // from -> to, de: para:
        $this->publishes([
            __DIR__.'/views' => base_path('resources/views/Anger/'),
            __DIR__.'/assets/js' => public_path('js'),
            __DIR__.'/assets/css' => public_path('css'),
            // __DIR__.'/assets/ajax-loader.gif' => public_path('img/img.png'),
            __DIR__.'/assets/bootstrap-4.0.0-dist' => public_path('bootstrap-4.0.0-dist'),
            __DIR__.'/assets/anger-files' => public_path('anger-files'),
            __DIR__.'/app/Traits/Anger.php' => public_path('/app/Traits/Anger.php'),
        ],'anger');

        // não esquecer o TRAIT!!!!!!!
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        
        $this->mergeConfigFrom(
            __DIR__.'/config/anger.php', 'anger'
        );



    }
}
