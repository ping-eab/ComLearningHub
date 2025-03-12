<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// New routes for housing-related pages
Route::get('/housing-rights', function () {
    return view('housing-rights');
})->name('housing-rights');

Route::get('/philippine-laws', function () {
    return view('philippine-laws');
})->name('philippine-laws');

Route::get('/importance-of-housing', function () {
    return view('importance-of-housing');
})->name('importance-of-housing');

require __DIR__.'/auth.php';
