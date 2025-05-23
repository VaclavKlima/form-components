<?php

namespace Dragan\FormComponents;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class FormComponentsServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        $this->loadViewsFrom(__DIR__ . '/../src/resources/views', 'form');

        Blade::componentNamespace('Dragan\FormComponents\app\Views\Components', 'form');
    }

    public function register(): void
    {
        //
    }
}
