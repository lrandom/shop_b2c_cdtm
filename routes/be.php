<?php

use Illuminate\Support\Facades\Route;

//admin/user/add
Route::prefix('/admin')->group(function () {
    Route::prefix('/user')->group(function () {
        Route::get('/list', [\App\Http\Controllers\Admin\UserController::class, 'index'])->name('admin.user.list');
        Route::get('/add',
            [\App\Http\Controllers\Admin\UserController::class, 'add'])->name('admin.user.add');
        Route::post('/do-add',
            [\App\Http\Controllers\Admin\UserController::class, 'doAdd'])->name('admin.user.doAdd');
        Route::get('/edit/{id}', [\App\Http\Controllers\Admin\UserController::class, 'edit'])
            ->name('admin.user.edit');
        Route::post('/do-edit/{id}', [\App\Http\Controllers\Admin\UserController::class, 'doEdit'])
            ->name('admin.user.doEdit');
        Route::get('/delete/{id}', [\App\Http\Controllers\Admin\UserController::class, 'delete'])
            ->name('admin.user.delete');
    });
});


