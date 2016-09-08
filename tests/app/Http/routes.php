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
    return view('welcome');
});

if ( ! function_exists('welcome')) {
    function welcome()
    {
        if (auth()->check()) {
            return 'Bienvenid' . ( auth()->user()->gender == 'm' ? 'o ' : 'a ' ) . auth()->user()->name . '!';
        }
        
        return 'Welcome guest!';
    }
}

Route::post('paquetes/agregar', 'PaquetesController@agregar');
