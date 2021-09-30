<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;


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


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
