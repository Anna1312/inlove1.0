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
Route::controllers(array(
    'auth'      => 'Auth\AuthController',
    'password'  => 'Auth\PasswordController'
));

Route::get('/', function () {
    return view('welcome');
});

Route::get('index', 'Inlove\IndexController@index');

Route::get('test', function(){
    return 'this is test';
} );