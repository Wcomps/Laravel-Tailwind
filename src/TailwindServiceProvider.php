<?php

namespace Wcomps\Tailwind;

use Illuminate\Support\ServiceProvider;
use Illuminate\Routing\Router;

class TailwindServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot(Router $router)
    {
        $this->publishes([
            __DIR__.'/Config/tailwind.php' => config_path('tailwind.php'),
        ], 'tailwind_config');

        $this->loadViewsFrom(__DIR__ . '/Views', 'tailwind');

        $this->publishes([
            __DIR__ . '/Views' => resource_path('views/vendor/tailwind'),
        ]);
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom(
            __DIR__.'/Config/tailwind.php', 'tailwind'
        );
    }
}
