<?php

use App\Http\Controllers\KeranjangController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/coba', function () {
    return view('kasir.jualan.index');
});

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'authenticate'])->name('login');

Route::get('/dashboard/user', [UserController::class, 'index'])->name('user');
Route::get('/dashboard/user/create', [UserController::class, 'create'])->name('user.create');
Route::get('/dashboard/user/{id}/edit', [UserController::class, 'edit'])->name('user.edit');
Route::post('/dashboard/user', [UserController::class, 'store'])->name('user.store');
Route::put('/dashboard/user/{id}', [UserController::class, 'update'])->name('user.update');
Route::delete('/dashboard/user/{id}', [UserController::class, 'destroy'])->name('user.destroy');



Route::get('/kasir/jualan/create', [KeranjangController::class, 'create']);
Route::get('/kasir/jualan', [KeranjangController::class, 'index']);
Route::post('/kasir/keranjang', [KeranjangController::class, 'addkeranjang']);
Route::delete('/kasir/keranjang/{id}', [KeranjangController::class, 'destroy'])->name('hapus.keranjang');
Route::post('/kasir/bayar', [KeranjangController::class, 'store'])->name('kasir.bayar');




Route::get('/dashboard/produk', [ProdukController::class, 'index'])->name('produk');
Route::get('/dashboard/produk/create', [ProdukController::class, 'create'])->name('produk.create');
Route::post('/dashboard/produk', [ProdukController::class, 'store'])->name('produk.store');
Route::get('/dashboard/produk/{kode}/edit', [ProdukController::class, 'edit'])->name('produk.edit');
Route::put('/dashboard/produk/{id}/', [ProdukController::class, 'update'])->name('produk.update');
Route::delete('/dashboard/produk/{id}', [ProdukController::class, 'destroy'])->name('produk.delete');
