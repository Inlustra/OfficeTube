<?php

function getViewPath($name)
{
    return 'scripts.app.' . $name . '.' . $name;
}

function getComponentPath($name)
{
    return 'scripts.components.' . $name . '.' . $name;
}

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
    $view_path = getViewPath($name);
    if (View::exists($view_path)) {
        return View::make($view_path);
    }
    return App::abort(404);
});


Route::get('/components/{name}', function ($name) {
    $view_path = getComponentPath($name);
    if (View::exists($view_path)) {
        return View::make($view_path);
    }
    return App::abort(404);
});

Route::get('auth/soundcloud', ['as' => 'auth.soundcloud', 'uses' => 'Auth\\OAuthController@loginWithSoundcloud']);


Route::group(['prefix' => 'data'], function () {
    Route::get('user', ['as' => 'auth.user', 'uses' => 'Auth\\AuthController@getUser']);
    Route::post('login', ['as' => 'auth.user.login', 'uses' => 'Auth\\AuthController@login']);
    Route::get('logout', ['as' => 'auth.user.logout', 'uses' => 'Auth\\AuthController@logout']);

});
