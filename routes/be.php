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

        Route::get('/search', [\App\Http\Controllers\Admin\UserController::class, 'search'])
            ->name('admin.user.search');
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

    Route::prefix('/product')->group(function () {
        Route::get('/list', [\App\Http\Controllers\Admin\ProductController::class, 'index'])->name('admin.product.list');
        Route::get('/add',
            [\App\Http\Controllers\Admin\ProductController::class, 'add'])->name('admin.product.add');
        Route::post('/do-add',
            [\App\Http\Controllers\Admin\ProductController::class, 'doAdd'])->name('admin.product.doAdd');
        Route::get('/edit/{id}', [\App\Http\Controllers\Admin\ProductController::class, 'edit'])
            ->name('admin.product.edit');
        Route::post('/do-edit/{id}', [\App\Http\Controllers\Admin\ProductController::class, 'doEdit'])
            ->name('admin.product.doEdit');
        Route::get('/delete/{id}', [\App\Http\Controllers\Admin\ProductController::class, 'delete'])
            ->name('admin.product.delete');

        Route::get('/search', [\App\Http\Controllers\Admin\ProductController::class, 'search'])
            ->name('admin.product.search');
    });

    Route::prefix('/variant')->group(function () {
        Route::get('/list', [\App\Http\Controllers\Admin\VariantController::class, 'index'])->name('admin.variant.list');
        Route::get('/add',
            [\App\Http\Controllers\Admin\VariantController::class, 'add'])->name('admin.variant.add');
        Route::post('/do-add',
            [\App\Http\Controllers\Admin\VariantController::class, 'doAdd'])->name('admin.variant.doAdd');
        Route::get('/edit/{id}', [\App\Http\Controllers\Admin\VariantController::class, 'edit'])
            ->name('admin.variant.edit');
        Route::post('/do-edit/{id}', [\App\Http\Controllers\Admin\VariantController::class, 'doEdit'])
            ->name('admin.variant.doEdit');
        Route::get('/delete/{id}', [\App\Http\Controllers\Admin\VariantController::class, 'delete'])
            ->name('admin.variant.delete');
    });

    Route::prefix('/variant_value')->group(function () {
        Route::get('/list', [\App\Http\Controllers\Admin\VariantValueController::class, 'index'])->name('admin.variant_value.list');
        Route::get('/add',
            [\App\Http\Controllers\Admin\VariantValueController::class, 'add'])->name('admin.variant_value.add');
        Route::post('/do-add',
            [\App\Http\Controllers\Admin\VariantValueController::class, 'doAdd'])->name('admin.variant_value.doAdd');
        Route::get('/edit/{id}', [\App\Http\Controllers\Admin\VariantValueController::class, 'edit'])
            ->name('admin.variant_value.edit');
        Route::post('/do-edit/{id}', [\App\Http\Controllers\Admin\VariantValueController::class, 'doEdit'])
            ->name('admin.variant_value.doEdit');
        Route::get('/delete/{id}', [\App\Http\Controllers\Admin\VariantValueController::class, 'delete'])
            ->name('admin.variant_value.delete');
    });

    Route::prefix('/brand')->group(function () {
        Route::get('/list', [\App\Http\Controllers\Admin\BrandController::class, 'index'])->name('admin.brand.list');
        Route::get('/add',
            [\App\Http\Controllers\Admin\BrandController::class, 'add'])->name('admin.brand.add');
        Route::post('/do-add',
            [\App\Http\Controllers\Admin\BrandController::class, 'doAdd'])->name('admin.brand.doAdd');
        Route::get('/edit/{id}', [\App\Http\Controllers\Admin\BrandController::class, 'edit'])
            ->name('admin.brand.edit');
        Route::post('/do-edit/{id}', [\App\Http\Controllers\Admin\BrandController::class, 'doEdit'])
            ->name('admin.brand.doEdit');
        Route::get('/delete/{id}', [\App\Http\Controllers\Admin\BrandController::class, 'delete'])
            ->name('admin.brand.delete');
    });

    Route::prefix('/order')->group(function () {
        Route::get('/list', [\App\Http\Controllers\Admin\OrderController::class,
            'filter'])->name('admin.order.list');
        Route::get('/detail/{id}', [\App\Http\Controllers\Admin\OrderController::class,
            'detail'])->name('admin.order.detail');
        Route::get('/change-status/{id}/{status}', [\App\Http\Controllers\Admin\OrderController::class, 'changeStatus',
        ])->name('admin.order.change-status');
    });


});


