<?php

namespace Squarenetmedia\Auth;

use Illuminate\Support\ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'auth');
        $this->loadRoutesFrom(__DIR__.'/../routes/web.php');

        // Add this line to allow publishing views
        $this->publishes([
            __DIR__.'/../resources/views' => resource_path('views/squarenetmedia/auth'),
        ], 'views');
    }

    public function register()
    {
        //
    }
}
