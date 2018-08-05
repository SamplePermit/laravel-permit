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
Route::view('/help', 'help');
Route::resource('aircraft', 'AircraftController')->middleware('auth');
Route::view('/faq', 'faq')->middleware('auth');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::view('/dashboard', 'dashboard')->middleware('auth');
