<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::post('register','UserController@register');
Route::post('login','UserController@login');


Route::get('profile','UserController@getAuthenticatedUser');
Route::get('user','UserController@getUser');

Route::post('bet/{id}','UserController@bet');
Route::post('resetpwd/{id}','UserController@resetpwd');
Route::post('resetname/{id}','UserController@resetname');
Route::post('upload/{id}','UserController@upload');
