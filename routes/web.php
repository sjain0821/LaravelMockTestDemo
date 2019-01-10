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

//Auth Routes
Route::get('/', '\App\Modules\Auth\Controllers\LoginController@getLogin')->name('login');
Route::post('/', '\App\Modules\Auth\Controllers\LoginController@postLogin');
Route::post('logout', '\App\Modules\Auth\Controllers\LoginController@getLogout')->name('logout');
Route::get('register', '\App\Modules\Auth\Controllers\RegisterController@getRegister');
Route::post('register', '\App\Modules\Auth\Controllers\RegisterController@postRegister');
Route::get('home', '\App\Modules\Auth\Controllers\HomeController@index');
Route::get('/user/verify/{user_token}/{user_id}', '\App\Modules\Auth\Controllers\RegisterController@verifyUser');
// Forgot Password Routes
Route::get('forgot', '\App\Modules\Auth\Controllers\ForgotPasswordController@getForgotPassword');
Route::post('forgot', '\App\Modules\Auth\Controllers\ForgotPasswordController@sendResetLinkEmail');
Route::get('/user/reset-password/{user_id}/{user_token}','\App\Modules\Auth\Controllers\ResetPasswordController@resetPassword');
Route::post('reset-password','\App\Modules\Auth\Controllers\ResetPasswordController@postResetPassword');

Route::get('google-login', '\App\Modules\Auth\Controllers\LoginController@loginWithGoogle');
Route::get('github-login', '\App\Modules\Auth\Controllers\LoginController@loginWithGithub');
Route::get('facebook-login', '\App\Modules\Auth\Controllers\LoginController@loginWithFacebook');


