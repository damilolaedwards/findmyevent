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

Route::get('/', 'HomeController@home');
Route::get('/register', 'RegisterController@show')->name('register.show');
Route::post('/register', 'RegisterController@create')->name('register.create');
Route::get('/login', 'LoginController@show')->name('login.show');
Route::post('/login', 'LoginController@login')->name('login.create');
Route::get('/dashboard', 'HomeController@dashboard')->name('dashboard');