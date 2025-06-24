<?php

namespace Daniellefence\Dropdown;

use Daniellefence\Dropdown\View\Components\Dropdown;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class DropdownServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
        /*
         * Optional methods to load your package assets
         */
        // $this->loadTranslationsFrom(__DIR__.'/../resources/lang', 'df');
         $this->loadViewsFrom(__DIR__.'/../resources/views', 'df');
         Blade::componentNamespace('Daniellefence\\Dropdown\\View\\Components', 'df');

        // $this->loadMigrationsFrom(__DIR__.'/../database/migrations');
        // $this->loadRoutesFrom(__DIR__.'/routes.php');

        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__.'/../config/config.php' => config_path('dropdown.php'),
            ], 'config');

            // Publishing the views.
            /*$this->publishes([
                __DIR__.'/../resources/views' => resource_path('views/vendor/dropdown'),
            ], 'views');*/

            // Publishing assets.
            /*$this->publishes([
                __DIR__.'/../resources/assets' => public_path('vendor/dropdown'),
            ], 'assets');*/

            // Publishing the translation files.
            /*$this->publishes([
                __DIR__.'/../resources/lang' => resource_path('lang/vendor/dropdown'),
            ], 'lang');*/

            // Registering package commands.
            // $this->commands([]);
        }
    }

    /**
     * Register the application services.
     */
    public function register()
    {
        // Automatically apply the package configuration
        $this->mergeConfigFrom(__DIR__.'/../config/config.php', 'dropdown');

        // Register the main class to use with the facade
        $this->app->singleton('dropdown', function () {
            return new Dropdown;
        });
    }
}
