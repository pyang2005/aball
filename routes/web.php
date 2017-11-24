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
    return view('welcome');
});

Route::any('/wechat', 'WeChatController@serve');
Route::get('/news', 'NewsController@index');
Route::get('/news/{id}', 'NewsController@show');

Route::get('/home', 'HomeController@index');
// Route::any('/home', 'HomeController@index');
// Route::any('/home', 'HomeController@index');
// Route::any('/home', 'HomeController@index');

Route::any('/ground', 'GroundController@index');

Route::any('/match', 'MatchController@index');

