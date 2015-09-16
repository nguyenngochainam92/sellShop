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

Route::get('/', [
	'uses' => "HomeController@index",
	'as'=>'home'
]);

//Admin
Route::get('admin',[
	'uses' => 'AdminController@admin',
	'as' => 'admin',
	'middleware' => 'admin'
]);

Route::get('/home', function () {
    return view('front/home');
});
Route::get('/contact',function(){
	return view('front/contact');
});
Route::get('/pdetail',function(){
	return view('front/productDetail');
});
// Auth
Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
