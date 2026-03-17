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

Route::get('/vidu1','App\Http\Controllers\ViDuController@vidu1');

Route::get('/vidu2','App\Http\Controllers\ViDuController@vidu2');

Route::get('/Age', function() {
    return view('Age'); 
});

Route::post('/Age','App\Http\Controllers\ViDuController@Age');

Route::get('/laythongtinsach','App\Http\Controllers\BookController@laythongtinsach2');

Route::get('/sach','App\Http\Controllers\BookController@laythongtinsach');
Route::get('/theloai','App\Http\Controllers\BookController@laythongtintheloai');
Route::get('/QB_themdulieu','App\Http\Controllers\BookController@QB_themdulieu');

Route::get('/giahan', function () {
    return 'Gia Han';
});