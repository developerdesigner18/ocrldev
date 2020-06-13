<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/api', 'HomeController@test')->name('api');
Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix' => 'admin'], function () {
		Route::get('/index', 'HomeController@index');
		Route::get('/home', 'HomeController@index');
		Route::get('/photoList', 'Admin\HomeController@photoList');
		Route::get('/photoUpload', 'Admin\HomeController@photoUpload');
		Route::post('/postPhotoUpload', 'Admin\HomeController@postPhotoUpload');
		Route::get('/photoScan/{id}', 'Admin\HomeController@photoScan');
});

