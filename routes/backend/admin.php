<?php

use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\Product\ProductController;

/*
 * All route names are prefixed with 'admin.'.
 */
Route::redirect('/', '/admin/dashboard', 301);
Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');

Route::group([
    'prefix'    => 'product',
    'as'        => 'product.',
    'namespace' => 'Product',
], function () {
    Route::group(['namespace' => 'Product'], function () {
        Route::get('product', [ProductController::class, 'index'])->name('product.index');
        Route::get('product/create', [ProductController::class, 'create'])->name('product.create');
        Route::post('product/store', [ProductController::class, 'store'])->name('product.store');
    });
});