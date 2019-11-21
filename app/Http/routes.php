<?php

use App\Http\Controllers\adminController;

Route::get('/', 'userController@welcome');
Route::get('/test', 'userController@test');
Route::get('/login', 'userController@login')->name('login');


Route::group(['prefix' => 'admin', 'middleware' => 'prevent-back-history'], function () {

    Route::get('/login', 'adminController@login')->name('adminlogin');

    Route::post('/logincheck', 'adminController@logincheck')->name('logincheck');
    Route::get('/register', 'adminController@register')->name('register');
    Route::post('/registernew', 'adminController@registernew')->name('registernew');

    Route::group(['middleware' => 'auth'], function () {
        Route::get('/chpass', 'adminController@chpass')->name('chpass');
        Route::get('/dashboard', 'adminController@dashboard')->name('dashboard');
        Route::get('/logout', 'adminController@logout')->name('adminlogout');
    });
});


Route::auth();
Route::get('/home', 'HomeController@index');
Route::get('/admin/allusers', 'HomeController@allusers');
Route::get('/admin/addusers', 'HomeController@addusers');
Route::get('/admin/addusersinfo', 'HomeController@addusersinfo');
Route::post('/admin/addnewuser', 'HomeController@addnewuser');
Route::post('/admin/addnewuserinfo', 'HomeController@addnewuserinfo');
