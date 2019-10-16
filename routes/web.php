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
Route::get('/register', 'RegisterController@show')->name('register.show')->middleware('guest');
Route::post('/register', 'RegisterController@create')->name('register.create')->middleware('guest');
Route::get('/login', 'LoginController@show')->name('login.show')->middleware('guest');
Route::post('/login', 'LoginController@login')->name('login.create')->middleware('guest');
Route::get('/logout', 'LoginController@logout')->name('logout')->middleware('auth');
Route::get('/dashboard', 'HomeController@dashboard')->name('dashboard')->middleware('auth');
Route::get('/create-event', 'EventController@show')->name('event.show')->middleware('auth');
Route::post('/create-event', 'EventController@create')->name('event.create')->middleware('auth');
Route::get('/all-events', 'EventController@allevents')->name('events.all');
Route::get('/event/{id}/show', 'EventController@oneevent')->name('oneevent');
Route::get('/event/{id}/edit', 'EventController@edit')->name('editevent')->middleware('auth');
Route::post('/event/{id}/update', 'EventController@update')->name('event.update')->middleware('auth');
Route::get('/event/{id}/delete', 'EventController@delete')->name('event.delete')->middleware('auth');