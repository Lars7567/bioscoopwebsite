<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FilmController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::name('films.')->group(function () {
    Route::get('/films', [FilmController::class, 'index'])->name('index');
    Route::get('/films/create', [FilmController::class, 'create'])->name('create');
    Route::post('/films', [FilmController::class, 'store'])->name('store');
    Route::get('/films/edit/{film}', [FilmController::class, 'edit'])->name('edit');
    Route::put('/films/{film}', [FilmController::class, 'update'])->name('update');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
