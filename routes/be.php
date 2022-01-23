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

    Route::prefix('/category')->group(function () {
        Route::get('/list', [\App\Http\Controllers\Admin\CategoriesController::class, 'index'])->name('admin.category.list');
        Route::get('/add',
            [\App\Http\Controllers\Admin\CategoriesController::class, 'add'])->name('admin.category.add');
        Route::post('/do-add',
            [\App\Http\Controllers\Admin\CategoriesController::class, 'doAdd'])->name('admin.category.doAdd');
        Route::get('/edit/{id}', [\App\Http\Controllers\Admin\CategoriesController::class, 'edit'])
            ->name('admin.category.edit');
        Route::post('/do-edit/{id}', [\App\Http\Controllers\Admin\CategoriesController::class, 'doEdit'])
            ->name('admin.category.doEdit');
        Route::get('/delete/{id}', [\App\Http\Controllers\Admin\CategoriesController::class, 'delete'])
            ->name('admin.category.delete');

    });

    Route::prefix('/post')->group(function () {
        Route::get('/list', [\App\Http\Controllers\Admin\PostController::class, 'index'])->name('admin.post.list');
        Route::get('/add',
            [\App\Http\Controllers\Admin\PostController::class, 'add'])->name('admin.post.add');
        Route::post('/do-add',
            [\App\Http\Controllers\Admin\PostController::class, 'doAdd'])->name('admin.post.doAdd');
        Route::get('/edit/{id}', [\App\Http\Controllers\Admin\PostController::class, 'edit'])
            ->name('admin.post.edit');
        Route::post('/do-edit/{id}', [\App\Http\Controllers\Admin\PostController::class, 'doEdit'])
            ->name('admin.post.doEdit');
        Route::get('/delete/{id}', [\App\Http\Controllers\Admin\PostController::class, 'delete'])
            ->name('admin.post.delete');

    });

});


