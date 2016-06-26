<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::group(['middleware'  =>  ['web']], function() {
    Route::get('/login', 'UserController@getLogin')->name('login');
    Route::post('/login', 'UserController@postLogin');

    Route::group(['middleware'  =>  'App\Http\Middleware\UserMiddleware'], function() {
        Route::get('/', 'BaseController@index')->name('index');
        Route::get('/logout', 'UserController@logOut');

        Route::resource('/players', 'PlayerController');
    });
});