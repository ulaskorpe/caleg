<?php

use App\Http\Controllers\User\UserController;
use Illuminate\Support\Facades\Route;

//use App\Http\Controllers\UserController;
/*
|--------------------------------------------------------------------------
| User Routes
|--------------------------------------------------------------------------
|
| Here is where you can register user routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "userauth" middleware group. Make something great!
|
*/

$prefix = 'user';
$middlewares = ['auth'];


// Route::group(['prefix' => $prefix, 'as' =>'user.'], function () {

//     Route::get('login','App\Http\Controllers\Auth\LoginController@getLogin')->name('login');
//     Route::post('login', 'App\Http\Controllers\Auth\LoginController@postLogin')->name('login.post');
//     Route::get('logout', 'App\Http\Controllers\Auth\LoginController@logout')->name('logout');
//     Route::get('forget-password', 'App\Http\Controllers\Auth\LoginController@forgetPassword')->name('forget.password');
//     Route::post('forget-password-send', 'App\Http\Controllers\Auth\LoginController@Send_Reset_Link')->name('forget.password.post');
//     Route::get('/reset-password-otp/{serial}', 'App\Http\Controllers\Auth\LoginController@Reset_Password_Show')->name('forget.password.reset');
//     Route::post('reset-password', 'App\Http\Controllers\Auth\LoginController@Reset_Password')->name('forget.password.reset.post');
//     Route::get('register', 'App\Http\Controllers\Auth\RegisterController@getRegister')->name('register');
//     Route::post('registering', 'App\Http\Controllers\Auth\RegisterController@postRegister')->name('register.post');
    
// });

Route::controller(UserController::class)->prefix($prefix)->middleware($middlewares)->group(function () {
    //View routes for all pages

    //User Dashboard 
	Route::get('dashboard','dashboard')->name('user.dashboard');

});