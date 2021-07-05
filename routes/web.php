<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('konten.konten');
})->name('penginapan.home');
