<?php

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

//Route::get('/', function () {
//    return view('pages.home');
//});

Route::resource('/','App\Http\Controllers\TrangChuController');



Route::resource('user','App\Http\Controllers\UserController');


Auth::routes();

Route::group(['middleware' => 'check-role'], function() {
	Route::get('/admin', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
	Route::resource('management-user','App\Http\Controllers\ManagementUserController');
});


