<?php

namespace Ajaxray\OpenGraph\Providers;

use Illuminate\Support\ServiceProvider;

class OpenGraphServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadTranslationsFrom(__DIR__ . '/../Resources/lang', 'opengraph');

        $this->app['router']->pushMiddlewareToGroup('web', \Ajaxray\OpenGraph\Http\Middleware\InjectOpenGraphTags::class);
    }

    public function register()
    {
        $this->mergeConfigFrom(
            __DIR__ . '/../Config/system.php',
            'core'
        );        
        
    }
}