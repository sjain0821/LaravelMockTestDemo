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
Route::post('login', '\App\Modules\APIs\Controllers\APIController@login');
Route::post('register', '\App\Modules\APIs\Controllers\APIController@register');

Route::group(['middleware' => 'auth:api'], function(){
	Route::post('details', '\App\Modules\APIs\Controllers\APIController@details');
});