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
<<<<<<< HEAD
Route::post('register','UserController@register');
Route::post('login','UserController@login');
Route::get('profile','UserController@getAuthenticatedUser');
=======

Route::post('register','UserController@register');
Route::post('login','UserController@login');


Route::get('profile','UserController@getAuthenticatedUser');
Route::get('user','UserController@getUser');

Route::post('bet/{id}','UserController@bet');
>>>>>>> 73f99a4262d295e758b31409c78a0408d599d5a6
