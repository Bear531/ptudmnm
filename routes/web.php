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
    return "Hello Yen";
});

Route::get('/quynhanh','App\Http\Controllers\ten@ten');

route::get('/camha','App\Http\Controllers\btn@ten');

route::get('/runtime','App\Http\Controllers\btn@runtime');
