<?php

use App\Http\Controllers\Admin\AdminHomeController;
use App\Http\Controllers\Client\HomeController;
use Illuminate\Support\Facades\Route;


//Admin Routes 
Route::get('/admin/home', [AdminHomeController::class, 'index'])->name('admin_home');




// Client Routes
Route::get('/', [HomeController::class, 'index'])->name('client_home');

