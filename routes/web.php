<?php

<<<<<<< HEAD
use App\Events\WebsocketDemoEvent;
=======
>>>>>>> 73f99a4262d295e758b31409c78a0408d599d5a6
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
<<<<<<< HEAD
    broadcast(new WebsocketDemoEvent('dummydata'));
    return view('welcome');
});

Route::any('{slug}', function () {
    return view('welcome');
});
=======
    return view('welcome');
});

Route::get("admin/login",'UserController@adminLogin')->name('admin.login');
Route::post("admin/postLogin",'UserController@postLogin')->name('adminLogin');
Route::middleware('auth')->group(function(){
Route::get("admin/dashboard",function(){
    return view('admin.dashboard');
})->name('admin.home')->middleware('is_admin');
Route::get('admin/users','UserController@getUsers')->name('admin.users');
Route::get('admin/editUser/{id}','UserController@editUser')->name('admin.editUser');
Route::get('admin/balancecut/{id}','UserController@balcut')->name('admin.balancecut');
Route::get('admin/balanceadd/{id}','UserController@baladd')->name('admin.balanceadd');
Route::post('admin/addBalance/{id}','UserController@addBalance')->name('admin.addBalance');
Route::post('admin/cutBalance/{id}','UserController@cutBalance')->name('admin.cutBalance');
Route::get('admin/levels','LevelController@index')->name('admin.level');
Route::get('admin/addLevel','LevelController@addLevel')->name('admin.addLevel');
Route::post('admin/storeLevel','LevelController@storeLevel')->name('admin.storeLevel');
Route::get('admin/editLevel/{id}','LevelController@editLevel')->name('admin.editLevel');
Route::post('admin/updateLevel/{id}','LevelController@updateLevel')->name('admin.updateLevel');
Route::get('admin/deleteLevel/{id}','LevelController@deleteLevel')->name('admin.deleteLevel');
});
Route::post("/admin/logout",function(){
    Auth::logout();
    return redirect("admin/login");
})->name('logout');



Route::any('{slug}', function () {
    return view('welcome');
})->name('home');
>>>>>>> 73f99a4262d295e758b31409c78a0408d599d5a6
Route::any('/{slug}/{name}', function () {
    return view('welcome');
});
Route::any('/{slug}/{slug1}/{name}', function () {
    return view('welcome');
});
Route::any('/{slug}/{slug1}/{slug2}/{name}', function () {
    return view('welcome');
<<<<<<< HEAD
});
=======
});
>>>>>>> 73f99a4262d295e758b31409c78a0408d599d5a6
