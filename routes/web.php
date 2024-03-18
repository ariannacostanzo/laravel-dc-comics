<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ComicController;


Route::get('/', function () {
    return view('home');
})->name('home');

//rotta per comics
Route::get('/comics', [ComicController::class, 'index'])->name('comics.index');

//rotta per comics create
Route::get('/comics/create', [ComicController::class, 'create'])->name('comics.create');

//rotta per deleted comics
Route::get('/comics/trash', [ComicController::class, 'trash'])->name('comics.trash');

//rotta per restore
Route::patch('/comics/{comic}/restore', [ComicController::class, 'restore'])->name('comics.restore');
Route::delete('/comics/{comic}/drop', [ComicController::class, 'drop'])->name('comics.drop');


//rotta per comics edit
Route::get('/comics/{comic}/edit', [ComicController::class, 'edit'])->name('comics.edit')->withTrashed();

//rotta per comics show
Route::get('/comics/{comic}', [ComicController::class, 'show'])->name('comics.show')->withTrashed();

//rotta per comics update
Route::put('/comics/{comic}', [ComicController::class, 'update'])->name('comics.update')->withTrashed();

//rotta per comics post store
Route::post('/comics', [ComicController::class, 'store'])->name('comics.store');

//rotta peer comics soft delete
Route::delete('/comics/{comic}', [ComicController::class, 'destroy'])->name('comics.destroy')->withTrashed();


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
