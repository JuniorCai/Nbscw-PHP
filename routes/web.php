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



Route::group(['middleware' => ['web']], function () {
    Route::get("/","common\IndexController@index");


    Route::get('/login','auth\LoginController@showLoginForm');
    Route::post('/login','auth\LoginController@login');
    Route::get('/logout','auth\LoginController@logout');

    Route::get('/register','auth\RegisterController@showRegistrationForm')->name("RegisterUser");
    Route::post('/register','auth\RegisterController@register');

    Route::post('/sendCode','auth\VerifyController@sendMobileCode');
    Route::post('/sendCode','auth\VerifyController@sendMobileCode');
    Route::get('/getCaptcha/{tmp}','auth\VerifyController@getCaptcha');


    Route::post('/verify/checkCaptcha','auth\VerifyController@checkCaptcha');
    Route::post('/verify/checkAccountExist','auth\VerifyController@checkAccountExist');
    Route::post('/verify/checkMobileExist','auth\VerifyController@checkMobileExist');



    //公共页面
    Route::get('/sell/search/','common\sellController@search');
    Route::get('/sell/','common\sellController@search');


});
