<?php

use App\Http\Controllers\ComicController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [ComicController::class, 'index'])->name('home.index');

Route::resource('comics', ComicController::class);

Route::get('/characters', function () {
    return view('pages.characters');
})->name('pages.characters');

Route::get('/movies', function () {
    return view('pages.movies');
})->name('pages.movies');

Route::get('/tv', function () {
    return view('pages.tv');
})->name('pages.tv');

Route::get('/games', function () {
    return view('pages.games');
})->name('pages.games');

Route::get('/collectibles', function () {
    return view('pages.collectibles');
})->name('pages.collectibles');

Route::get('/videos', function () {
    return view('pages.videos');
})->name('pages.videos');

Route::get('/fans', function () {
    return view('pages.fans');
})->name('pages.fans');

Route::get('/news', function () {
    return view('pages.news');
})->name('pages.news');

Route::get('/shop', function () {
    return view('pages.shop');
})->name('pages.shop');
