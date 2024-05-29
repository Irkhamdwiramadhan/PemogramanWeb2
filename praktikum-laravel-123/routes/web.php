<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\adminController;
use App\Http\Controllers\contactController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\KelurahanController;
use App\Http\Controllers\PasienController;
use App\Http\Controllers\DokterController;



Route::get('/', function () {
    return view('welcome');
});
Route::get('/beranda', function () {
    return view('Halaman Beranda');
});

Route::get('/salam', function () {
    return view('Selamat Datang Wahyu Di Laravel');
});

Route::get('/profile', function () {
    return view('Halaman Profile');
});


//praktikum laravel 2

Route::get('/dahsboard', [adminController::class, 'index']);
Route::get('/contact', [contactController::class, 'index']);
Route::get('/About', [AboutController::class, 'index']);

//praktikum laravel 3
Route::get('/kelurahan', [KelurahanController::class, 'index'])->name('kelurahan.index');
Route::get('/pasien', [PasienController::class, 'index'])->name('pasien.index');
Route::get('/dokter', [DokterController::class, 'index'])->name('dokter.index');
