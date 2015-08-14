<?php

namespace TheNairn;

use Illuminate\Support\ServiceProvider;
use TheNairn\CAuth;

class CAuthServiceProvider extends ServiceProvider
{
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
}
