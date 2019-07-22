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
    return view('auth.login');
});

Auth::routes(['verify' => true]);

//User Dashboard
Route::group(['middleware' => ['verified', 'auth']], function () {
	//User Home
	Route::get('/home', 'HomeController@index')->name('home');
});

//Private Area - Admin Users
Route::group(['middleware' => ['verified','auth','admin']], function () { 
	//Admin Home
  	Route::get('/admin/home', 'Admin\HomeController@index')->name('admin-home');
});

