<?php

use Illuminate\Support\Facades\Route;

/* Admin Controllers */
use App\Http\Controllers\AdminLoginController;
use App\Http\Controllers\Admin\AdminHomeController;
use App\Http\Controllers\Admin\AdminKaryaController;
use App\Http\Controllers\Admin\AdminKontenController;
use App\Http\Controllers\Admin\AdminMadingController;
use App\Http\Controllers\Admin\AdminOrganigramController;
use App\Http\Controllers\Admin\AdminProfileController;
use App\Http\Controllers\Admin\AdminResensiController;
use App\Http\Controllers\Admin\AdminTamanBacaController;

/* Front Controllers */
use App\Http\Controllers\Front\HomeController;
use App\Http\Controllers\Front\PageController;
use App\Http\Controllers\UserLoginController;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\FrontKarya;
use App\Http\Controllers\FrontKonten;
use App\Http\Controllers\FrontLiputan;
use App\Http\Controllers\FrontMading;



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

/*Admin*/
Route::get('/admin/home', [AdminHomeController::class, 'index'])->name('admin_home')->middleware('admin:admin');
Route::get('/admin/login', [AdminLoginController::class, 'index'])->name('admin_login');
Route::post('/admin/login-submit', [AdminLoginController::class, 'login_submit'])->name('admin_login_submit');
Route::get('/admin/forgot-password', [AdminLoginController::class, 'forgot_password'])->name('admin_forgot_password');
Route::get('/admin/reset-password', [AdminLoginController::class, 'reset_password'])->name('admin_reset_password');


/* Admin Section */
Route::get('/admin/dashboard', [AdminHomeController::class, 'index'])->name('admin_home')->middleware('admin:admin');
Route::get('/admin/tambah/admin', [AdminHomeController::class, 'tambah'])->name('admin_tambah_admin')->middleware('admin:admin');
Route::post('/admin/tambah/admin/submit', [AdminHomeController::class, 'store'])->name('admin_tambah_admin_submit');

/* Navbar */
Route::get('/admin/profile', [AdminProfileController::class, 'index'])->name('admin_profile')->middleware('admin:admin');
Route::post('/admin/edit-profile-submit/{id}', [AdminProfileController::class, 'update'])->name('admin_edit_profile_submit');

/* First System */
Route::get('/admin/login', [AdminLoginController::class, 'index'])->name('admin_login');
Route::get('/admin/logout', [AdminLoginController::class, 'index'])->name('admin_logout')->middleware('admin:admin');
Route::post('/admin/login-submit', [AdminLoginController::class, 'login_submit'])->name('admin_login_submit');
Route::get('/admin/forgot-password', [AdminLoginController::class, 'forgot_password'])->name('admin_forgot_password');
Route::post('/admin/forgot-password-submit', [AdminLoginController::class, 'forgot_password_submit'])->name('admin_forgot_password_submit');
Route::get('/admin/reset-password/{email}', [AdminLoginController::class, 'reset_password'])->name('admin_reset_password')->middleware('admin:admin');
Route::post('/admin/reset-password-submit', [AdminLoginController::class, 'reset_password_submit'])->name('admin_reset_password_submit');

/* CRUD Bagian Karya */
Route::get('/admin/daftar-karya', [AdminKaryaController::class, 'daftar_karya'])->name('daftar_karya')->middleware('admin:admin');
Route::get('/admin/tambah/karya', [AdminKaryaController::class, 'tambah'])->name('admin_tambah_karya')->middleware('admin:admin');
Route::post('/admin/tambah-karya-submit', [AdminKaryaController::class, 'store'])->name('admin_tambah_karya_submit');
Route::get('/admin/edit/karya/{id}', [AdminKaryaController::class, 'edit'])->name('admin_edit_karya')->middleware('admin:admin');
Route::post('/admin/edit-karya-submit/{id}', [AdminKaryaController::class, 'update'])->name('admin_edit_karya_submit');
Route::get('/admin/karya/delete/{id}', [AdminKaryaController::class, 'delete'])->name('admin_hapus_karya')->middleware('admin:admin');

/* CRUD Bagian Organigram */
Route::get('/admin/daftar-organigram', [AdminOrganigramController::class, 'daftar_organigram'])->name('daftar_organigram')->middleware('admin:admin');
Route::get('/admin/tambah/organigram', [AdminOrganigramController::class, 'tambah'])->name('admin_tambah_organigram')->middleware('admin:admin');
Route::post('/admin/tambah-organigram-submit', [AdminOrganigramController::class, 'store'])->name('admin_tambah_organigram_submit');
Route::get('/admin/edit/organigram/{id}', [AdminOrganigramController::class, 'edit'])->name('admin_edit_organigram')->middleware('admin:admin');
Route::post('/admin/edit-organigram-submit/{id}', [AdminOrganigramController::class, 'update'])->name('admin_edit_organigram_submit');
Route::get('/admin/organigram/delete/{id}', [AdminOrganigramController::class, 'delete'])->name('admin_hapus_organigram')->middleware('admin:admin');

/* CRUD Bagian Resensi */
Route::get('/admin/daftar-resensi', [AdminResensiController::class, 'daftar_resensi'])->name('daftar_resensi')->middleware('admin:admin');
Route::get('/admin/tambah/resensi', [AdminResensiController::class, 'tambah'])->name('admin_tambah_resensi')->middleware('admin:admin');
Route::post('/admin/tambah-resensi-submit', [AdminResensiController::class, 'store'])->name('admin_tambah_resensi_submit');
Route::get('/admin/edit/resensi/{id}', [AdminResensiController::class, 'edit'])->name('admin_edit_resensi')->middleware('admin:admin');
Route::post('/admin/edit-resensi-submit/{id}', [AdminResensiController::class, 'update'])->name('admin_edit_resensi_submit');
Route::get('/admin/resensi/delete/{id}', [AdminResensiController::class, 'delete'])->name('admin_hapus_resensi')->middleware('admin:admin');

/* CRUD Bagian Konten */
Route::get('/admin/daftar-konten', [AdminKontenController::class, 'daftar_konten'])->name('daftar_konten')->middleware('admin:admin');
Route::get('/admin/tambah/konten', [AdminKontenController::class, 'tambah'])->name('admin_tambah_konten')->middleware('admin:admin');
Route::post('/admin/tambah-konten-submit', [AdminKontenController::class, 'store'])->name('admin_tambah_konten_submit');
Route::get('/admin/edit/konten/{id}', [AdminKontenController::class, 'edit'])->name('admin_edit_konten')->middleware('admin:admin');
Route::post('/admin/edit-konten-submit/{id}', [AdminKontenController::class, 'update'])->name('admin_edit_konten_submit');
Route::get('/admin/konten/delete/{id}', [AdminKontenController::class, 'delete'])->name('admin_hapus_konten')->middleware('admin:admin');

/* CRUD Bagian Mading */
Route::get('/admin/daftar-mading', [AdminMadingController::class, 'daftar_mading'])->name('daftar_mading')->middleware('admin:admin');
Route::get('/admin/tambah/mading', [AdminMadingController::class, 'tambah'])->name('admin_tambah_mading')->middleware('admin:admin');
Route::post('/admin/tambah-mading-submit', [AdminMadingController::class, 'store'])->name('admin_tambah_mading_submit');
Route::get('/admin/edit/mading/{id}', [AdminMadingController::class, 'edit'])->name('admin_edit_mading')->middleware('admin:admin');
Route::post('/admin/edit-mading-submit/{id}', [AdminMadingController::class, 'update'])->name('admin_edit_mading_submit');
Route::get('/admin/mading/delete/{id}', [AdminMadingController::class, 'delete'])->name('admin_hapus_mading')->middleware('admin:admin');

/* CRUD Bagian Taman Baca ( BUKU ) */
Route::get('/admin/daftar/buku', [AdminTamanBacaController::class, 'daftar_buku'])->name('admin_daftar_buku')->middleware('admin:admin');
Route::get('/admin/tambah/buku', [AdminTamanBacaController::class, 'tambah'])->name('admin_tambah_buku')->middleware('admin:admin');
Route::post('/admin/tambah-buku-submit', [AdminTamanBacaController::class, 'store'])->name('admin_tambah_buku_submit');
Route::get('/admin/edit/buku/{id}', [AdminTamanBacaController::class, 'edit'])->name('admin_edit_buku')->middleware('admin:admin');
Route::post('/admin/edit-buku-submit/{id}', [AdminTamanBacaController::class, 'update'])->name('admin_edit_buku_submit');
Route::get('/admin/buku/delete/{id}', [AdminTamanBacaController::class, 'delete'])->name('admin_hapus_buku')->middleware('admin:admin');

/* CRUD Bagian Taman Baca ( PEMINJAMAN ) */
Route::get('/admin/daftar/peminjaman', [AdminTamanBacaController::class, 'daftar_peminjaman'])->name('admin_daftar_peminjaman')->middleware('admin:admin');
Route::get('/admin/tambah/peminjaman', [AdminTamanBacaController::class, 'tambah_data'])->name('admin_tambah_peminjaman')->middleware('admin:admin');
Route::post('/admin/tambah-peminjaman-submit', [AdminTamanBacaController::class, 'store_data'])->name('admin_tambah_peminjaman_submit');
Route::get('/admin/edit/peminjaman/{id}', [AdminTamanBacaController::class, 'edit_data'])->name('admin_edit_peminjaman')->middleware('admin:admin');
Route::post('/admin/edit-peminjaman-submit/{id}', [AdminTamanBacaController::class, 'update_data'])->name('admin_edit_peminjaman_submit');
Route::get('/admin/peminjaman/delete/{id}', [AdminTamanBacaController::class, 'delete_data'])->name('admin_hapus_peminjaman')->middleware('admin:admin');
