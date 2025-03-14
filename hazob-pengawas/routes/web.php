<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\Auth\LoginController;
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/hazard', function () {
    return view('hazard');
});

Route::get('/hazard/upload', function () {
    return view('upload');
});

Route::get('/hazard/input', function () {
    return view('input');
});


// Route untuk menampilkan form login
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');

// Route untuk memproses login
Route::post('/login', [LoginController::class, 'login'])->name('login');

// Route untuk logout
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
// routes/web.php
Auth::routes();  // Ini akan otomatis mendefinisikan rute untuk login, register, dan lainnya


// Route untuk halaman dashboard (home)
Route::get('/', function () {
    return view('home'); // Atau arahkan ke controller yang sesuai
})->middleware('auth')->name('home');



Route::get('/statistic', function () {
    return view('statistic');
});

Route::get('/laporan', [LaporanController::class, 'index'])->name('laporan.index'); // Menampilkan halaman laporan
Route::post('/laporan', [LaporanController::class, 'store'])->name('laporan.store'); // Menyimpan data laporan
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
