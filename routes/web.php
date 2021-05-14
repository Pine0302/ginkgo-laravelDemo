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
Route::get('/', 'UserController@wechatAuth');
Route::get('/home', 'UserController@Home');
Route::get('/test', 'UserController@test');
Route::post('/question', 'QuestionController@collectAnswer');
Route::get('/auth', 'UserController@auth');

