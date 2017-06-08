<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::group(['middleware' => ['web']], function () {
    Route::get('/login','auth\LoginController@showLoginForm');
    Route::post('/login','auth\LoginController@login');
    Route::get('/logout','auth\LoginController@logout');

    Route::get('/register','auth\RegisterController@showRegistrationForm');
    Route::post('/register','auth\LoginController@register');


});
