<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MovieController;


Route::get('/', [MovieController::class, 'index'])->name('home');
Route::get('/movie/{movie}', [MovieController::class, 'show'])->name('show');
Route::get('/search', [MovieController::class, 'showSearchPage'])->name('search');
