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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


Route::group(['prefix' => 'acmesa'], function () {
    
    Route::resource('car', 'CarController');
    Route::get('report-car', 'CarController@reportCar');    
    Route::resource('person', 'PersonController');
    Route::get('cities', 'PersonController@cities');
});