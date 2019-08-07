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
	//User Profile
	Route::get('/profile', 'HomeController@profile')->name('profile');
});

//Private Area - Admin Users
Route::group(['middleware' => ['verified','auth','admin']], function () { 
	//Dashboard
  	Route::get('/admin/home', 'Admin\HomeController@index')->name('admin-home');
  	//Manage Users
  	Route::get('/admin/users/all', 'Admin\UsersController@allUsers')->name('all-users');
  	Route::get('/admin/users/add', 'Admin\UsersController@addUser')->name('adduser');
  	Route::post('/admin/users/addnewuser', 'Admin\UsersController@addNewUser')->name('addnewuser');
  	Route::get('/admin/users/edituser/{user}', 'Admin\UsersController@editUser');
  	Route::post('/admin/users/postedituser/{user}', 'Admin\UsersController@postEditUser');
  	Route::get('/admin/users/delete/{user}', 'Admin\UsersController@deleteUser');
  	Route::get('/admin/users/userdetail/{user}', 'Admin\UsersController@userDetail')->name('user-detail');

  	//Accounts Types
  	Route::get('/admin/accounts/types/add', 'Admin\AccountsController@addAccountType')->name('addaccounttype');
  	Route::post('/admin/accounts/types/post', 'Admin\AccountsController@postAccountType')->name('postaccounttype');
  	Route::get('/admin/accounts/types/edit/{type}', 'Admin\AccountsController@editAccountType');
  	Route::post('/admin/accounts/types/postedit/{type}', 'Admin\AccountsController@postEditAccountType');
  	Route::get('/admin/accounts/types/delete/{type}', 'Admin\AccountsController@deleteAccountType');
  	//User accounts
  	Route::get('/admin/accounts/all', 'Admin\AccountsController@allAccounts')->name('all-accounts');
  	Route::get('/admin/accounts/{user}', 'Admin\AccountsController@userAccounts');
  	Route::get('/admin/accounts/add/{user}', 'Admin\AccountsController@addAccount');
  	Route::post('/admin/accounts/postnewaccount/{user}', 'Admin\AccountsController@postNewAccount');

});

