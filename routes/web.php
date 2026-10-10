<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.dashboard');
})->name('dashboard');

Route::get('/analisis-dakwaan', function () {
    return view('pages.analisis-dakwaan');
})->name('analisis-dakwaan');

Route::get('/database-kuhp', function () {
    return view('pages.database-kuhp');
})->name('database-kuhp');
