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
Route::get('/photo', 'TestController@photoUpload');
// Route::get('/api', 'TestController@test');
Route::get('api', 'TestController@test');
Route::get('upload', 'TestController@photoUpload');
Route::get('/', function () {
    return view('welcome');
});

// Auth::routes();
