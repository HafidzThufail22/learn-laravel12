<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\KataBijakController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\PropinsiController;
use App\Http\Controllers\KotaController;
use App\Http\Controllers\EloController;
use App\Http\Controllers\AnggotaController;

//default
Route::get('/', function () {
    return view('welcome');
});

//01 route dasar
Route::get('/halo', function () {
    return 'Halo Laravel!';
});

//02 route dengan view
Route::get('/dashboard', function () {
    return view('dashboard'); //resources/views/dashboard.blade.php
});

//03 route dengan parameter
Route::get('/user/{nama}', function ($nama) {
    return "Halo, $nama!";
});

//04 route dengan parameter opsional
Route::get('/produk/{id?}', function ($id = null) {
    return $id ? "Produk ID: $id" : "Tidak ada ID produk";
});

//05 Route dengan Regular Expression Constraint
Route::get('/kategori/{nama}', function ($nama) {
    return "Kategori: $nama";
})->where('nama', '[A-Za-z]+');

//06 Route dengan nama / Named Route
Route::get('/profil', function () {
    return 'Ini halaman profil';
})->name('profil');

Route::get('/link-profil', function () {
    return route('profil');
});

//07 route ke Controller
Route::get('/home', [HomeController::class, 'index']);

//08 route resource
Route::resource('produk', ProdukController::class);

//09 route group dengan middleware & prefix
Route::prefix('admin')->group(function () {
    Route::get('/dashboard', function () {
        return 'Halaman Dashboard Admin';
    });
    Route::get('/laporan', function () {
        return 'Halaman Laporan Admin';
    });
});

//10 route fallback
// Route::fallback(function () {
//     return 'Halaman tidak ditemukan';
// });

//10 A.
Route::get('kata-bijak/kata', [KataBijakController::class, 'kata']);

//11 mengguunakan controller dan view
Route::get('kata-bijak/pepatah', [KataBijakController::class, 'pepatah'])->name('kataPepatah');

//propinsi route


Route::resource('propinsi', PropinsiController::class);

Route::resource('barangs', BarangController::class);

// anggota resource routes
Route::resource('anggota', AnggotaController::class);

Route::resource('kota', KotaController::class)->parameters([
    'kota' => 'kota'
]);



Route::get('elo/bacaAll', [EloController::class, 'bacaAll']);

Route::get('elo/bacaAllRelasi', [EloController::class, 'bacaAllRelasi']);

Route::get('elo/bacaSatu', [EloController::class, 'bacaSatu']);

Route::get('elo/bacaPilih', [EloController::class, 'bacaPilih']);

Route::get('elo/tambahKota', [
    EloController::class,
    'tambahKota'
]);
