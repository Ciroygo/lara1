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

Route::get('/', 'StaticPagesController@home')->name('home');
Route::get('/help', 'StaticPagesController@help')->name('help');
Route::get('/about', 'StaticPagesController@about')->name('about');

// 用户注册页面
Route::get('signup', 'UsersController@create')->name('signup');

Route::resource('users', 'UsersController');


// 登陆页、登陆操作、退出操作
Route::get('login', 'SessionsController@create')->name('login');
Route::post('login', 'SessionsController@store')->name('login');
Route::delete('logout', 'SessionsController@destroy')->name('logout');

// 更新用户
Route::get('/users/{user}/edit', 'UsersController@edit')->name('users.edit');

// 激活路由
Route::get('signup/confirm/{token}', 'UsersController@confirmEmail')->name('confirm_email');
