<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use TheNairn\CAuth;

class CAuthServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('CAuth', function ($app) {
            return new CAuth;
        });
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return ['CAuth'];
    }
}
