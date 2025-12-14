<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KotaAuthController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';

// Route::get('/kota/gate', 'KotaController@gate');
Route::get('/kota/gate', [App\Http\Controllers\KotaController::class, 'gate'])
    ->middleware('auth');

//route test relasi
Route::get('/kota/test-relasi', [App\Http\Controllers\KotaController::class, 'testRelasi']);

// Route resource untuk CRUD Kota
Route::middleware('auth')->group(function () {
    Route::resource('kota', App\Http\Controllers\KotaController::class)->parameters([
        'kota' => 'kota'
    ]);
});

Route::middleware('auth')->group(function () {
    Route::get('/kotaAut/view', [KotaAuthController::class, 'view']);
    Route::get('/kotaAut/create', [KotaAuthController::class, 'create']);
    Route::get('/kotaAut/update', [KotaAuthController::class, 'update']);
    Route::get('/kotaAut/delete', [KotaAuthController::class, 'delete']);
});
