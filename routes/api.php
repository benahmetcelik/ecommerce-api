<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});






Route::group(['prefix'=>'auth/','as'=>'auth'],function (){
    Route::post('register','AuthController@register')->name('register');
    Route::post('login','AuthController@login')->name('login');
});


Route::group(['prefix'=>'auth/','as'=>'auth','middleware'=>['check.auth']],function (){
    Route::get('me','AuthController@me')->name('me');
});
