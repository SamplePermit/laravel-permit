<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/



Route::post('register', 'API\RegisterController@register');
Route::middleware('auth:api')->group( function () {
    Route::resource('approvals', 'API\ApprovalController');
    Route::resource('operators','API\OperatorController');
    Route::resource('aircraft', 'API\AircraftController');
    Route::resource('application', 'API\ApplicationController');
    Route::resource('permit', 'API\ApplicationController');
});

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

