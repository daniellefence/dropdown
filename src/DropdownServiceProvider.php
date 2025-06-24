<?php

namespace Daniellefence\Dropdown;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;

class DropdownServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'df');

        Blade::componentNamespace('Daniellefence\\Dropdown\\View\\Components', 'df');

        $this->publishes([
            __DIR__.'/../resources/views' => resource_path('views/vendor/df'),
        ], 'df-dropdown-views');
    }

    public function register(): void
    {
        //
    }
}
