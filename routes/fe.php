<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [\App\Http\Controllers\HomeController::class, 'index']);
Route::get('/post/{id}', function ($id) {

})->name('fe.post.detail');
Route::get('/category/{id}', [\App\Http\Controllers\HomeController::class, 'blogList'])
    ->name('fe.category.detail');
Route::get('/post-detail/{id}', [\App\Http\Controllers\HomeController::class, 'postDetail'])
    ->name('fe.post.detail');
?>
