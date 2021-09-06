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

Route::resource('/','App\Http\Controllers\TrangChuPageController');
Route::resource('danh-muc-phim','App\Http\Controllers\DanhMucPageController');
Route::resource('xem-phim', 'App\Http\Controllers\XemPhimPageController');
Route::resource('lien-he', 'App\Http\Controllers\LienHePageController');

// Người dùng thường
Route::group(['middleware' => 'check-login'], function() {
	Route::resource('user','App\Http\Controllers\UserController');
	//Đổi tên
	Route::get('/user/name/{id}', 'App\Http\Controllers\UserController@showname');
	Route::post('/user/changename/{id}', 'App\Http\Controllers\UserController@updatename');
	//Đổi mật khẩu
	Route::get('/user/pass/{id}', 'App\Http\Controllers\UserController@showpass');
	Route::post('/user/changepass/{id}', 'App\Http\Controllers\UserController@updatepass');
	//Bình luận
	Route::post('/user/comment/{id_nguoidung}/{id_phim}', 'App\Http\Controllers\BinhLuanController@postbinhluan');
});


Auth::routes();

// Admin
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
	// Phim
	Route::resource('phim','App\Http\Controllers\PhimController');
	Route::get('/phim/kichhoat/{id}', 'App\Http\Controllers\PhimController@kichhoat');
	Route::get('/phim/vohieu/{id}', 'App\Http\Controllers\PhimController@vohieu');

});


