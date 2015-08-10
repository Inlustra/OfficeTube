<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

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
        $this->app['cauth'] = $this->app->share(function ($app) {
            return new \TheNairn\CAuth;
        });
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return ['TheNairn\CAuth'];
    }
}
