<?php

use App\Events\WebsocketDemoEvent;
use Illuminate\Support\Facades\Route;

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
    broadcast(new WebsocketDemoEvent('dummydata'));
    return view('welcome');
});

Route::any('{slug}', function () {
    return view('welcome');
});
Route::any('/{slug}/{name}', function () {
    return view('welcome');
});
Route::any('/{slug}/{slug1}/{name}', function () {
    return view('welcome');
});
Route::any('/{slug}/{slug1}/{slug2}/{name}', function () {
    return view('welcome');
});