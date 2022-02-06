<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [\App\Http\Controllers\HomeController::class, 'index']);
Route::get('/category/{id}', [\App\Http\Controllers\HomeController::class, 'category'])->name('fe.category');
Route::get('/search', [\App\Http\Controllers\HomeController::class, 'search'])->name('fe.search');
Route::get('/product/{id}', [\App\Http\Controllers\ProductController::class, 'detail'])->name('fe.product.detail');
Route::get('/cart', [\App\Http\Controllers\CartController::class, 'list'])->name('fe.cart');

Route::get('/checkout', [\App\Http\Controllers\OrderController::class, 'checkout'])
    ->middleware(['auth'])->name('fe.checkout');
Route::post('/do-checkout', [\App\Http\Controllers\OrderController::class, 'doCheckout'])
    ->middleware(['auth'])
    ->name('fe.do-checkout');

Route::get('/checkout/success/{order_id}', [
    \App\Http\Controllers\OrderController::class, 'checkoutSuccess'
])->name('fe.checkout.success');
