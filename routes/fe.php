<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [\App\Http\Controllers\HomeController::class, 'index']);
Route::get('/category/{id}', [\App\Http\Controllers\HomeController::class, 'category'])->name('fe.category');
Route::get('/search', [\App\Http\Controllers\HomeController::class, 'search'])->name('fe.search');
