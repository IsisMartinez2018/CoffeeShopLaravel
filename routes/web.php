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

Route::get('/homevista', function () {
    return view('homevista');
});

Route::get('/aboutus', function () {
    return view('aboutus');
});

Route::get('/menu', function () {
    return view('menu');
});

Route::get('/services', function () {
    return view('services');
});

Route::get('/team', function () {
    return view('team');
});

Route::get('/gallery', function () {
    return view('gallery');
});

Route::get('/menu', function () {
    return view('menu');
});

Route::get('/contactus', function () {
    return view('contactus');
});



Auth::routes();

Route::get('/home', 'HomeController@index');
Route::get('/users/logout', 'Auth\LoginController@userLogout')->name('user.logout');


Route::get('/', function () {
    return view('welcome');
});

Route::group(['middleware'=>['auth']], function(){
Route::get("create", 'orderControllerUser@create');
Route::post("store", 'orderControllerUser@store');


});


Route::prefix('/admin')->group(function(){
	Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
	Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
	Route::get('/', 'AdminController@index')->name('admin.dashboard');
    Route::get('/logout', 'Auth\AdminLoginController@logout')->name('admin.logout');


    Route::post('/password/email', 'Auth\AdminForgotPasswordController@sendResetLinkEmail')->name('admin.password.email');
    Route::get('/password/reset', 'Auth\AdminForgotPasswordController@showLinkRequestForm')->name('admin.password.request');
Route::post('/password/reset', 'Auth\AdminResetPasswordController@reset');
Route::get('/password/reset/{token}', 'Auth\AdminResetPasswordController@showResetForm')->name('admin.password.reset');



});

Route::group(['middleware'=>['auth:admin']], function(){

Route::resource('orders', 'ordersController');
});
