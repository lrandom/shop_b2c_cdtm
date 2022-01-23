<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user',
    function (Request $request) {
        return $request->user();
    });

Route::prefix('cart')->group(function () {
    Route::post('add', [\App\Http\Controllers\Api\CartController::class, 'addToCart'])
        ->name('api.cart.add');

    Route::get('get', [\App\Http\Controllers\Api\CartController::class, 'getCart'])
        ->name('api.cart.get');
    Route::get('total-items', [\App\Http\Controllers\Api\CartController::class, 'getTotalItems'])
        ->name('api.cart.total-items');
});

