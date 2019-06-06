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

Route::view('/', 'static_pages/index', ['title' => '首页']);
Route::view('/about', 'static_pages/about', ['title' => '关于我们']);

Route::get('login', 'SessionController@create')->name('login');
Route::post('login', 'SessionController@store')->name('signin');

Route::resource('user', 'UserController');
