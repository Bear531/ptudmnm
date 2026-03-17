<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/yen', function () {
    return "Hello Yen";
});


Route::get('/laythongtinsach','App\Http\Controllers\BookController@laythongtinsach2');

Route::get('/sach','App\Http\Controllers\BookController@laythongtinsach');
Route::get('/theloai','App\Http\Controllers\BookController@laythongtintheloai');
Route::get('/QB_themdulieu','App\Http\Controllers\BookController@QB_themdulieu');

Route::get('/quynhanh','App\Http\Controllers\ten@ten');

Route::get('/camha','App\Http\Controllers\btn@ten');

use App\Http\Controllers\MovieController;
Route::get('/top-movie', [MovieController::class, 'layphimtop']);
