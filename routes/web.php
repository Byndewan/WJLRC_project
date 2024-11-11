<?php

use App\Http\Controllers\AdminLoginController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminLoginControler;
use App\Http\Controllers\AdminRegisterController;
use App\Http\Controllers\Admin\AdminHOmeController;

/*Admin*/
Route::get('/admin/home', [AdminHomeController::class, 'index'])->name('admin_home')->middleware('admin:admin');
Route::get('/admin/login', [AdminLoginController::class, 'index'])->name('admin_login');
Route::post('/admin/login-submit', [AdminLoginController::class, 'login_submit'])->name('admin_login_submit');
Route::get('/admin/registration', [AdminRegisterController::class, 'index'])->name('admin_register');
Route::get('/admin/forgot-password', [AdminLoginController::class, 'forgot_password'])->name('admin_forgot_password');
Route::get('/admin/reset-password', [AdminLoginController::class, 'reset_password'])->name('admin_reset_password');

