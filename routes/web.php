<?php

use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/comics', function () {
    return view('comics.index');
})->name('comics.index');
