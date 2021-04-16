<?php

 use App\Http\Controllers\PenjualController;
 use App\Http\Controllers\PembeliController;
 use App\Http\Controllers\BarangController;


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
    return view('welcome');
});

Route::get('hai', function () {
	return "Hai, Selamat datang di situs www.lelang.com";
});

Route::get('login', function () {
	return view('login');
});

Route::get('register', function () {
	return view('register');
});

Route::get('penjual', [PenjualController::class, 'index']);

Route::get('pembeli', [PembeliController::class, 'index']);

Route::get('formulir', [BarangController::class, 'formulir']);
Route::post('formulir/proses', [BarangController::class, 'proses']);