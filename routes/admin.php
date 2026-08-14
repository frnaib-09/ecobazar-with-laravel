<?php

use App\Http\Controllers\Admin\AdminProfileController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;



Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

//Admin Profile
Route::prefix('/profile')->controller(AdminProfileController::class)->name('profile.')->group(function() {
    Route::get('/', 'viewProfile')->name('show');
    Route::patch('/update', 'updateProfile')->name('update');
});

//Category Routes
Route::get('/categories', [CategoryController::class, 'index'])->name('category.index');
Route::get('/categories/create', [CategoryController::class, 'create'])->name('category.create');
Route::post('/categories/store', [CategoryController::class, 'store'])->name('category.store');

//Product Routes
Route::get('/products', [ProductController::class, 'index'])->name('product.index');
Route::get('/products/create', [ProductController::class, 'create'])->name('product.create');
Route::post('/products/store', [ProductController::class, 'store'])->name('product.store');


//User Routes
Route::get('/users', [UserController::class, 'index'])->name('user.index');