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

Route::get('/', 'IndexController@home')->name('home');
Route::get('login', 'IndexController@login')->name('login');
Route::get('register', 'UserController@register')->name('register');
Route::get('list', 'UserListController@list')->name('list');
