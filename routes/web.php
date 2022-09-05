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

Route::get('/', 'LoginController@login')->name('home');
Route::get('login', 'LoginController@login')->name('login');
Route::get('register', 'RegisterController@registerForm')->name('register');
Route::get('list', 'UserListController@show')->name('list');

Route::post('register', 'RegisterController@registerPost')->name('register_post');
Route::post('list', 'UserListController@registerPost')->name('register_list_post');
