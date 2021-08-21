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
	// User
	Route::resource('management-user','App\Http\Controllers\ManagementUserController');
	// Thể loại
	Route::resource('theloai','App\Http\Controllers\TheLoaiController');
	Route::get('/theloai/kichhoat/{id}', 'App\Http\Controllers\TheLoaiController@kichhoat');
	Route::get('/theloai/vohieu/{id}', 'App\Http\Controllers\TheLoaiController@vohieu');
	// Quốc gia
	Route::resource('quocgia','App\Http\Controllers\QuocGiaController');
	Route::get('/quocgia/kichhoat/{id}', 'App\Http\Controllers\QuocGiaController@kichhoat');
	Route::get('/quocgia/vohieu/{id}', 'App\Http\Controllers\QuocGiaController@vohieu');
	// 
	Route::resource('phim','App\Http\Controllers\PhimController');
	Route::get('/phim/kichhoat/{id}', 'App\Http\Controllers\PhimController@kichhoat');
	Route::get('/phim/vohieu/{id}', 'App\Http\Controllers\PhimController@vohieu');

});


