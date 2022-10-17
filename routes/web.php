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

Route::get('/', 'WebController@index');

Auth::routes();

Route::group(['middleware' => ['web', 'auth']],function(){

	Route::get('/home', 'HomeController@index')->name('home');

    Route::resource('master_pengguna', 'ECommerce\PenggunaController');
	Route::get('/HapusPengguna/{id}', 'ECommerce\PenggunaController@destroy');

});
