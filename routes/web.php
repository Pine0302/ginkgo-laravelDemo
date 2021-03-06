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

/*Route::get('/', function () {
    return view('welcome');
});*/
Route::get('/user', 'UserController@index');
Route::get('/jssdk', 'UserController@jssdk');
Route::get('/', 'UserController@Home');
Route::post('/user', 'UserController@collect');
Route::post('/user_visit', 'UserController@collectVisit');
