<?php

 use App\Http\Controllers\PenjualController;
 use App\Http\Controllers\PembeliController;
 use App\Http\Controllers\BarangController;
 use App\Http\Controllers\DashboardController;


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

// route dashboard
Route::get('dashboard', [DashboardController::class, 'home']);
Route::get('dashboard/barang', [DashboardController::class, 'barang']);
Route::get('dashboard/laporan', [DashboardController::class, 'laporan']);

//route CRUD
Route::get('penjual',[PenjualController::class, 'index']);
Route::get('pembeli',[PembeliController::class, 'index1']);

Route::get('penjual/tambah',[PenjualController::class, 'tambah']);
Route::get('pembeli/tambah1',[PembeliController::class, 'tambah1']);

Route::post('penjual/store',[PenjualController::class, 'store']);