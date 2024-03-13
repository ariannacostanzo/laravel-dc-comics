<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ComicController;


Route::get('/', function () {
    return view('home');
})->name('home');

//rotta per comics
Route::get('/comics', [ComicController::class, 'index'])->name('comics.index');

//rotta per comics show
Route::get('/comics/{comic}', [ComicController::class, 'show'])->name('comics.show');
