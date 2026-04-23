<?php

use App\Http\Controllers\KeranjangController;
use App\Http\Controllers\ProdukController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('admin.home.index');
});

Route::get('/coba', function () {
    return view('kasir.jualan.index');
});

Route::get('/kasir/jualan/create', [KeranjangController::class, 'create']);
Route::get('/kasir/jualan', [KeranjangController::class, 'index']);
Route::post('/kasir/keranjang', [KeranjangController::class, 'addkeranjang']);




Route::get('/produk', [ProdukController::class, 'index']);
Route::get('/produk/tambah', [ProdukController::class, 'create'])->name('tambah-produk');
Route::post('/produk', [ProdukController::class, 'store']);
Route::get('/produk/{kode}/edit', [ProdukController::class, 'edit']);
Route::put('/produk/{id}/', [ProdukController::class, 'update']);
Route::delete('/produk/{id}', [ProdukController::class, 'destroy'])->name('produk');
