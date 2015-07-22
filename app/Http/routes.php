<?php

    /*
    |--------------------------------------------------------------------------
    | Application Routes
    |--------------------------------------------------------------------------
    |
    | Here is where you can register all of the routes for an application.
    | It's a breeze. Simply tell Laravel the URIs it should respond to
    | and give it the controller to call when that URI is requested.
    |
    */
    Route::get('/', function () {
        return view('index');
    });

    Route::get('/views/{name}', function ($name) {
        $view_path = 'scripts.app.' . $name.'.'.$name;
        if (View::exists($view_path)) {
            return View::make($view_path);
        }

        App::abort(404);
    });

    //Route::get('/', function () {
      //  return view('welcome');
    //});


    Route::get('auth/login', ['as' => 'auth.login', 'uses' => 'Auth\\AuthController@showLogin']);
    Route::get('auth/register', ['as' => 'auth.register', 'uses' => 'Auth\\AuthController@showRegister']);
    Route::get('auth/soundcloud', ['as' => 'auth.soundcloud', 'uses' => 'Auth\\OAuthController@loginWithSoundcloud']);
