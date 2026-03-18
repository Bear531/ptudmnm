<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/yen', function () {
    return "Hello Yen"; #dòng này để cố ý tạo xung đột
});

Route::get('/quynhanh', 'App\Http\Controllers\ten@ten');

Route::get('/laythongtinsach', 'App\Http\Controllers\BookController@laythongtinsach2');

Route::get('/sach', 'App\Http\Controllers\BookController@laythongtinsach');
Route::get('/theloai', 'App\Http\Controllers\BookController@laythongtintheloai');
Route::get('/QB_themdulieu', 'App\Http\Controllers\BookController@QB_themdulieu');

Route::get('/quynhanh', 'App\Http\Controllers\ten@ten');

route::get('/camha', 'App\Http\Controllers\btn@ten');

Route::get('/danhsachtheloaiphim', 'App\Http\Controllers\FilmController@layDanhSachTheLoaiPhim'); #7.1

route::get('/runtime', 'App\Http\Controllers\btn@runtime');
