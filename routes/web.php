<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Front\HomeController;
use App\Http\Controllers\Front\PageController;
use App\Http\Controllers\UserLoginController;
use App\Http\Controllers\RegistrationController;


// Front End
Route::get('/', [HomeController::class, 'index'])->name('home')->middleware('user:web');
Route::get('/pengertian', [PageController::class, 'index'])->name('pengertian')->middleware('user:web');
Route::get('/organigram', [PageController::class, 'organigram'])->name('organigram')->middleware('user:web');
Route::get('/divisi', [PageController::class, 'divisi'])->name('divisi')->middleware('user:web');
Route::get('/program-online', [PageController::class, 'program_online'])->name('program_online')->middleware('user:web');
Route::get('/program-offline', [PageController::class, 'program_offline'])->name('program_offline')->middleware('user:web');
Route::get('/karya', [HomeController::class, 'karya'])->name('karya')->middleware('user:web');

// Front End : Program Online
Route::get('/program-online/resensi', [PageController::class, 'resensi'])->name('resensi')->middleware('user:web');
Route::get('/program-online/konten', [PageController::class, 'konten'])->name('konten')->middleware('user:web');
Route::get('/program-online/liputan', [PageController::class, 'liputan'])->name('liputan')->middleware('user:web');

// Front End : Program Offline
Route::get('/program-offline/mading', [PageController::class, 'mading'])->name('mading')->middleware('user:web');

// Registration
Route::get('/user/registration', [RegistrationController::class, 'registration'])->name('registration');
Route::post('/user/registration-submit', [RegistrationController::class, 'registration_submit'])->name('registration_submit');
Route::get('/user/registration-to-login', [RegistrationController::class, 'registration_success'])->name('login_button');
Route::get('/registration/verify/{token}/{email}', [RegistrationController::class, 'registration_verify']);



// User Login
Route::get('/user/login', [UserLoginController::class, 'index'])->name('user_login');
Route::post('/user/login-submit', [UserLoginController::class, 'login_submit'])->name('user_login_submit');
Route::get('/user/logout', [UserLoginController::class, 'logout'])->name('user_logout');
Route::get('/user/forget-password', [UserLoginController::class, 'forget_password'])->name('user_forget_password');
Route::post('/user/forget-password-submit', [UserLoginController::class, 'forget_password_submit'])->name('user_forget_password_submit');
Route::get('/user/reset-password/{token}/{email}', [UserLoginController::class, 'reset_password'])->name('user_reset_password');
Route::post('/user/reset-password-submit', [UserLoginController::class, 'reset_password_submit'])->name('user_reset_password_submit');

// detail halaman
Route::get('/detail/karya', [FrontKarya::class, 'index'])->name('detail_karya');
Route::get('/detail/konten', [Frontkonten::class, 'index'])->name('detail_konten');
Route::get('/detail/liputan', [FrontLiputan::class, 'index'])->name('detail_liputan');
Route::get('/detail/mading', [FrontMading::class, 'index'])->name('detail_mading');
Route::get('/detail/resensi', [FrontMading::class, 'index'])->name('detail_resensi');

// detail halaman
// Route::get('/detail/karya', [FrontKarya::class, 'index'])->name('detail_karya');
// Route::get('/detail/konten', [Frontkonten::class, 'index'])->name('detail_konten');
// Route::get('/detail/liputan', [FrontLiputan::class, 'index'])->name('detail_liputan');
// Route::get('/detail/mading', [FrontMading::class, 'index'])->name('detail_mading');
// Route::get('/detail/resensi', [FrontMading::class, 'index'])->name('detail_resensi');
