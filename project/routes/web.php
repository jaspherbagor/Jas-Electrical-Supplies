<?php

use App\Http\Controllers\Admin\AdminHomeController;
use App\Http\Controllers\Admin\AdminProductController;
use App\Http\Controllers\Client\HomeController;
use Illuminate\Support\Facades\Route;


//Admin Routes 
Route::get('/admin/home', [AdminHomeController::class, 'index'])->name('admin_home');

Route::get('/admin/products', [AdminProductController::class, 'index'])->name('product_list');
Route::get('/admin/add/products', [AdminProductController::class, 'add'])->name('add_product');


// Client Routes
Route::get('/', [HomeController::class, 'index'])->name('client_home');

