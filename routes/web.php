<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TransaksiController;
use App\Http\Controllers\SubkategoriController;
use App\Http\Controllers\KategoriController;


Route::get('/', function () {
    return view('HalamanUtama');
});

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/pengeluaran', function () {
    return view('CatatanPengeluaran');
});

Route::get('/pemasukan', function () {
    return view('CatatanPemasukan');
});

// Auth::routes();
Route::get('/create', 'KategoriController@create');
Route::post('/proses', 'KategoriController@proses');
Route::resource('kategori', KategoriController::class);
Route::resource('subkategori', SubkategoriController::class);
Route::resource('transaksi', TransaksiController::class);
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// Route::get('/customer/logout', 'CustomerLoginController@logout')->name('customer.logout');
