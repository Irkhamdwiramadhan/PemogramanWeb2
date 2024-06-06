<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\adminController;
use App\Http\Controllers\contactController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\KelurahanController;
use App\Http\Controllers\PasienController;
use App\Http\Controllers\DokterController;
use App\Models\Pasien;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/beranda', function () {
    return view('Halaman Beranda');
});

Route::get('/salam', function () {
    return view('Selamat Datang iam Di Laravel');
});

Route::get('/profile', function () {
    return view('Halaman Profile');
});


//praktikum laravel 2

Route::get('/dahsboard', [adminController::class, 'index']);
Route::get('/contact', [contactController::class, 'index']);
Route::get('/About', [AboutController::class, 'index']);

//praktikum laravel 3
Route::get('/kelurahan', [KelurahanController::class, 'index'])->name('kelurahan.index');
Route::get('/pasien', [PasienController::class, 'index'])->name('pasien.index');
Route::get('/dokter', [DokterController::class, 'index'])->name('dokter.index');

//Praktikum laravel 4
Route::get('/kelurahan/create', [KelurahanController::class, 'create'])->name('kelurahan.create');
Route::post('/kelurahan/store', [KelurahanController::class, 'store'])->name('kelurahan.store');
Route::get('/kelurahan/show{id}', [KelurahanController::class, 'show'])->name('kelurahan.show');

Route::get('/pasien/create', [PasienController::class, 'create'])->name('pasien.create');
Route::post('/pasien/store', [PasienController::class, 'store'])->name('pasien.store');
Route::get('/pasien/show{id}', [PasienController::class, 'show'])->name('pasien.show');


//
Route::get('/kelurahan/edit/{id}', [KelurahanController::class, 'edit'])->name('kelurahan.edit');
