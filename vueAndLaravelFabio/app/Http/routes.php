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

Route::get('usuarios', ['as' => 'users.index', 'uses' => 'UsersController@index']);
Route::get('api/usuarios/listar', ['as' => 'users.listar', 'uses' => 'UsersController@listar']);

Route::get('/', function () {
    return view('welcome');
});
