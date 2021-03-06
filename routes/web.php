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
Route::resource('approvals','ApprovalController')->middleware('auth');
Route::resource('operators','OperatorController')->middleware('auth');
Route::view('/help', 'help');
Route::resource('aircraft', 'AircraftController')->middleware('auth');
Route::view('/faq', 'faq')->middleware('auth');
Route::resource('applications','ApplicationController')->middleware('auth');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::view('/dashboard', 'dashboard')->middleware('auth');
Route::resource('permits','PermitController')->middleware('auth');
