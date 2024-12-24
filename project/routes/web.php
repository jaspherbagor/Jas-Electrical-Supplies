<?php

use App\Http\Controllers\Admin\AdminHomeController;
use Illuminate\Support\Facades\Route;

Route::get('/admin/home', [AdminHomeController::class, 'index'])->name('admin_home');

Route::get('/', function () {
    return view('welcome');
});
