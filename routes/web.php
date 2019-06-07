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

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/', 'StaticPagesController@home')->name("home");

Route::get('/login', 'SessionController@create')->name('login');
Route::post('/login', 'SessionController@store')->name('signin');
Route::delete('/logout', 'SessionController@destroy')->name('logout');

// 用户管理:增删改查
Route::resource('user', 'UserController');
