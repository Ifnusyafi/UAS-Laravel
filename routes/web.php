<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\PasienController;

// Halaman utama sebelum login
Route::get('/', function () {
    return view('welcome');
});

// Halaman login
Route::get('login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('login', [LoginController::class, 'login']);

// Halaman dashboard setelah login
Route::middleware(['auth'])->group(function () {
    Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');
});
Route::resource('pasien', PasienController::class);

Route::resource('pasien', PasienController::class);
