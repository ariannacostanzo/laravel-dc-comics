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

//rotta statica per gli altri

Route::get('/characters', function () {
    return view('characters.index');
})->name('characters.index');

Route::get('/movies', function () {
    return view('movies.index');
})->name('movies.index');

Route::get('/tv', function () {
    return view('tv.index');
})->name('tv.index');

Route::get('/games', function () {
    return view('games.index');
})->name('games.index');

Route::get('/collectibles', function () {
    return view('collectibles.index');
})->name('collectibles.index');

Route::get('/videos', function () {
    return view('videos.index');
})->name('videos.index');

Route::get('/fans', function () {
    return view('fans.index');
})->name('fans.index');

Route::get('/news', function () {
    return view('news.index');
})->name('news.index');

Route::get('/shop', function () {
    return view('shop.index');
})->name('shop.index');
