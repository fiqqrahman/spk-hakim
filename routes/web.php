<?php

use Illuminate\Support\Facades\Route;

// Redirect halaman utama langsung ke halaman login
Route::get('/', function () {
    return redirect()->route('login');
});

// Route Halaman Login
Route::get('/login', function () {
    return view('auth.login');
})->name('login');

// Route Halaman Aplikasi Utama
Route::get('/dashboard', function () {
    return view('pages.dashboard');
})->name('dashboard');

Route::get('/analisis-dakwaan', function () {
    return view('pages.analisis-dakwaan');
})->name('analisis-dakwaan');

Route::get('/database-kuhp', function () {
    return view('pages.database-kuhp');
})->name('database-kuhp');
