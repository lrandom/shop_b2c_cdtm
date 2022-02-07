<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [\App\Http\Controllers\HomeController::class, 'index']);
Route::get('/post/{id}', function ($id) {

})->name('fe.post.detail');
?>
