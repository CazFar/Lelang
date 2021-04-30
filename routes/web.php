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

Route::get('/hai', function () {
	return "Hai, Selamat datang di situs www.lelang.com";
});

Route::get('/login', function () {
	return view('login');
});

Route::get('/register', function () {
	return view('register');
});

Route::get('/penjual', [PenjualController::class, 'index']);

Route::get('/pembeli', [PembeliController::class, 'index']);

Route::get('/barang', [BarangController::class, 'index']);

// route dashboard
Route::get('/dashboard', [DashboardController::class, 'home']);
Route::get('/dashboard/laporan', [DashboardController::class, 'laporan']);

//route CRUD
Route::get('/penjual',[PenjualController::class, 'index']);
Route::get('/pembeli',[PembeliController::class, 'index1']);
Route::get('/barang',[BarangController::class, 'index2']);

Route::get('/penjual/tambah',[PenjualController::class, 'tambah']);
Route::get('/pembeli/tambah1',[PembeliController::class, 'tambah1']);
Route::get('/barang/tambah2',[BarangController::class, 'tambah2']);

Route::post('/penjual/store',[PenjualController::class, 'store']);
Route::post('/pembeli/store',[PembeliController::class, 'store']);
Route::post('/barang/store',[BarangController::class, 'store']);

Route::get('/penjual/edit/{id}',[PenjualController::class, 'edit']);
Route::get('/pembeli/edit/{id}',[PembeliController::class, 'edit1']);
Route::get('/barang/edit/{id}',[BarangController::class, 'edit2']);

Route::post('/penjual/update',[PenjualController::class, 'update']);
Route::post('/pembeli/update1',[PembeliController::class, 'update1']);
Route::post('/barang/update2',[BarangController::class, 'update2']);

Route::get('/penjual/hapus/{id}',[PenjualController::class, 'hapus']);
Route::get('/pembeli/hapus/{id}',[PembeliController::class, 'hapus']);
Route::get('/barang/hapus/{id}',[BarangController::class, 'hapus']);