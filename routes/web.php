<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FilmController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\BookingController;


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
    Route::get('/films/{film}', [FilmController::class, 'show'])->name('show');
    Route::get('/films/{film}/edit', [FilmController::class, 'edit'])->name('edit');
    Route::put('/films/{film}', [FilmController::class, 'update'])->name('update');
    Route::get('/films/{film}/delete', [FilmController::class, 'delete'])->name('delete');
});



Route::name('about.')->group(function () {
    Route::get('/about', [AboutController::class, 'index'])->name('index');
});

Route::name('contact.')->group(function () {
    Route::get('/contact', [ContactController::class, 'index'])->name('index');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::name('resevering.')->group(function () {
        Route::get('/resevering', [BookingController::class, 'index'])->name('index');
        Route::get('/resevering/create/{film}', [BookingController::class, 'create'])->name('create');
        Route::post('/resevering', [BookingController::class, 'store'])->name('store');
        Route::delete('/resevering/{resevering}/delete', [BookingController::class, 'delete'])->name('delete');
    });
});

require __DIR__ . '/auth.php';
