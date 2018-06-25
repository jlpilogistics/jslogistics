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

Route::get('/', function () { return redirect('/users'); });

//Route::auth();
$this->get('login', 'Auth\AuthController@showLoginForm')->name('auth.login');
$this->post('login', 'Auth\AuthController@login')->name('auth.login');
$this->post('logout', 'Auth\AuthController@logout')->name('auth.logout');

Route::get('/home', 'HomeController@index');

Route::resource('/users', 'UsersController');
Route::resource('/quotations', 'QuotesController');
Route::get('demo',function(){

    return view('admin.demo');
});


//Route::get('login',function(){
//
//    return view('auth.login');
//});