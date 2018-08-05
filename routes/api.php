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
//for password
Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('register','UserController@register');
Route::post('login','UserController@login');
Route::middleware('auth:api')->get('/services','UserController@services');
//Route::middleware('jwt.auth')->get('/services','UserController@services');