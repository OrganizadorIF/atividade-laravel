<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MangaController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/manga/create', [MangaController::class, 'create'])->name('manga.create');
Route::post('/manga', [MangaController::class, 'store'])->name('manga.store');
Route::get('/manga', [MangaController::class, 'index'])->name('listagem');
Route::delete('/manga/{id}', [MangaController::class, 'destroy'])->name('manga.destroy');