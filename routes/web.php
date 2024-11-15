<?php

<<<<<<< HEAD
=======
use App\Http\Controllers\Admin\AdminLiputanController;
use App\Http\Controllers\AdminStatusTimController;
use App\Http\Controllers\KaryaLikeController;
use Illuminate\Support\Facades\Route;
use App\Livewire\Counter;

use App\Http\Controllers\SearchController;

/* Admin Controllers */
>>>>>>> 92a017870e9646e091a83cf9105066685839d4a1
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

<<<<<<< HEAD
=======
/* Admin Section */
Route::get('/admin/dashboard', [AdminHomeController::class, 'index'])
    ->name('admin_home')
    ->middleware('admin:admin');
Route::get('/admin/tambah/admin', [AdminHomeController::class, 'tambah'])
    ->name('admin_tambah_admin')
    ->middleware('admin:admin');
Route::post('/admin/tambah/admin/submit', [AdminHomeController::class, 'store'])->name('admin_tambah_admin_submit');
Route::get('/admin/kontak', [AdminKontakController::class, 'index'])
    ->name('admin_kontak')
    ->middleware('admin:admin');

/* Navbar */
Route::get('/admin/profile', [AdminProfileController::class, 'index'])
    ->name('admin_profile')
    ->middleware('admin:admin');
Route::post('/admin/edit-profile-submit/{id}', [AdminProfileController::class, 'update'])->name('admin_edit_profile_submit');

/* First System */
Route::get('/admin/login', [AdminLoginController::class, 'index'])->name('admin_login');
Route::get('/admin/logout', [AdminLoginController::class, 'index'])
    ->name('admin_logout')
    ->middleware('admin:admin');
Route::post('/admin/login-submit', [AdminLoginController::class, 'login_submit'])->name('admin_login_submit');
Route::get('/admin/forgot-password', [AdminLoginController::class, 'forgot_password'])->name('admin_forgot_password');
Route::post('/admin/forgot-password-submit', [AdminLoginController::class, 'forgot_password_submit'])->name('admin_forgot_password_submit');
Route::get('/admin/reset-password/{email}', [AdminLoginController::class, 'reset_password'])->name('admin_reset_password');
Route::post('/admin/reset-password-submit', [AdminLoginController::class, 'reset_password_submit'])->name('admin_reset_password_submit');

// Web Dynamic
Route::get('/admin/home-banner', [AdminHomePageController::class, 'index'])
    ->name('admin_home_banner')
    ->middleware('admin:admin');
Route::post('/admin/home-banner-update', [AdminHomePageController::class, 'store'])
    ->name('admin_home_banner_update')
    ->middleware('admin:admin');
Route::get('/admin/home-footer', [AdminHomePageController::class, 'footer'])
    ->name('admin_home_footer')
    ->middleware('admin:admin');
Route::post('/admin/home-footer-update', [AdminHomePageController::class, 'footer_update'])
    ->name('admin_home_footer_update')
    ->middleware('admin:admin');

/* CRUD Bagian Karya */
Route::get('/admin/daftar-karya', [AdminKaryaController::class, 'daftar_karya'])
    ->name('daftar_karya')
    ->middleware('admin:admin');
Route::get('/admin/tambah/karya', [AdminKaryaController::class, 'tambah'])
    ->name('admin_tambah_karya')
    ->middleware('admin:admin');
Route::post('/admin/tambah-karya-submit', [AdminKaryaController::class, 'store'])->name('admin_tambah_karya_submit');
Route::get('/admin/edit/karya/{id}', [AdminKaryaController::class, 'edit'])
    ->name('admin_edit_karya')
    ->middleware('admin:admin');
Route::post('/admin/edit-karya-submit/{id}', [AdminKaryaController::class, 'update'])->name('admin_edit_karya_submit');
Route::get('/admin/karya/delete/{id}', [AdminKaryaController::class, 'delete'])
    ->name('admin_hapus_karya')
    ->middleware('admin:admin');
Route::get('/admin/daftar-karya/search', [AdminKaryaController::class, 'search']);

/* CRUD Bagian Organigram */
Route::get('/admin/daftar-organigram', [AdminOrganigramController::class, 'daftar_organigram'])
    ->name('daftar_organigram')
    ->middleware('admin:admin');
Route::get('/admin/tambah/organigram', [AdminOrganigramController::class, 'tambah'])
    ->name('admin_tambah_organigram')
    ->middleware('admin:admin');
Route::post('/admin/tambah-organigram-submit', [AdminOrganigramController::class, 'store'])->name('admin_tambah_organigram_submit');
Route::get('/admin/edit/organigram/{id}', [AdminOrganigramController::class, 'edit'])
    ->name('admin_edit_organigram')
    ->middleware('admin:admin');
Route::post('/admin/edit-organigram-submit/{id}', [AdminOrganigramController::class, 'update'])->name('admin_edit_organigram_submit');
Route::get('/admin/organigram/delete/{id}', [AdminOrganigramController::class, 'delete'])
    ->name('admin_hapus_organigram')
    ->middleware('admin:admin');
Route::get('/admin/daftar-organigram/search', [AdminOrganigramController::class, 'search']);

/* CRUD Bagian Resensi */
Route::get('/admin/daftar-resensi', [AdminResensiController::class, 'daftar_resensi'])
    ->name('daftar_resensi')
    ->middleware('admin:admin');
Route::get('/admin/tambah/resensi', [AdminResensiController::class, 'tambah'])
    ->name('admin_tambah_resensi')
    ->middleware('admin:admin');
Route::post('/admin/tambah-resensi-submit', [AdminResensiController::class, 'store'])->name('admin_tambah_resensi_submit');
Route::get('/admin/edit/resensi/{id}', [AdminResensiController::class, 'edit'])
    ->name('admin_edit_resensi')
    ->middleware('admin:admin');
Route::post('/admin/edit-resensi-submit/{id}', [AdminResensiController::class, 'update'])->name('admin_edit_resensi_submit');
Route::get('/admin/resensi/delete/{id}', [AdminResensiController::class, 'delete'])
    ->name('admin_hapus_resensi')
    ->middleware('admin:admin');
Route::get('/admin/daftar-resensi/search', [AdminResensiController::class, 'search']);

/* CRUD Bagian Konten */
Route::get('/admin/daftar-konten', [AdminKontenController::class, 'daftar_konten'])
    ->name('daftar_konten')
    ->middleware('admin:admin');
Route::get('/admin/tambah/konten', [AdminKontenController::class, 'tambah'])
    ->name('admin_tambah_konten')
    ->middleware('admin:admin');
Route::post('/admin/tambah-konten-submit', [AdminKontenController::class, 'store'])->name('admin_tambah_konten_submit');
Route::get('/admin/edit/konten/{id}', [AdminKontenController::class, 'edit'])
    ->name('admin_edit_konten')
    ->middleware('admin:admin');
Route::post('/admin/edit-konten-submit/{id}', [AdminKontenController::class, 'update'])->name('admin_edit_konten_submit');
Route::get('/admin/konten/delete/{id}', [AdminKontenController::class, 'delete'])
    ->name('admin_hapus_konten')
    ->middleware('admin:admin');
Route::get('/admin/daftar-konten/search', [AdminKontenController::class, 'search']);

/* CRUD Bagian Liputan */
Route::get('/admin/daftar-liputan', [AdminLiputanController::class, 'daftar_liputan'])
    ->name('daftar_liputan')
    ->middleware('admin:admin');
Route::get('/admin/tambah/liputan', [AdminLiputanController::class, 'tambah'])
    ->name('admin_tambah_liputan')
    ->middleware('admin:admin');
Route::post('/admin/tambah-liputan-submit', [AdminLiputanController::class, 'store'])->name('admin_tambah_liputan_submit');
Route::get('/admin/edit/liputan/{id}', [AdminLiputanController::class, 'edit'])
    ->name('admin_edit_liputan')
    ->middleware('admin:admin');
Route::post('/admin/edit-liputan-submit/{id}', [AdminLiputanController::class, 'update'])->name('admin_edit_liputan_submit');
Route::get('/admin/liputan/delete/{id}', [AdminLiputanController::class, 'delete'])
    ->name('admin_hapus_liputan')
    ->middleware('admin:admin');
Route::get('/admin/daftar-liputan/search', [AdminLiputanController::class, 'search']);

/* CRUD Bagian Mading */
Route::get('/admin/daftar-mading', [AdminMadingController::class, 'daftar_mading'])
    ->name('daftar_mading')
    ->middleware('admin:admin');
Route::get('/admin/tambah/mading', [AdminMadingController::class, 'tambah'])
    ->name('admin_tambah_mading')
    ->middleware('admin:admin');
Route::post('/admin/tambah-mading-submit', [AdminMadingController::class, 'store'])->name('admin_tambah_mading_submit');
Route::get('/admin/edit/mading/{id}', [AdminMadingController::class, 'edit'])
    ->name('admin_edit_mading')
    ->middleware('admin:admin');
Route::post('/admin/edit-mading-submit/{id}', [AdminMadingController::class, 'update'])->name('admin_edit_mading_submit');
Route::get('/admin/mading/delete/{id}', [AdminMadingController::class, 'delete'])
    ->name('admin_hapus_mading')
    ->middleware('admin:admin');
Route::get('/admin/daftar-mading/search', [AdminMadingController::class, 'search']);

/* CRUD Bagian Taman Baca ( BUKU ) */
Route::get('/admin/daftar/buku', [AdminTamanBacaController::class, 'daftar_buku'])
    ->name('admin_daftar_buku')
    ->middleware('admin:admin');
Route::get('/admin/tambah/buku', [AdminTamanBacaController::class, 'tambah'])
    ->name('admin_tambah_buku')
    ->middleware('admin:admin');
Route::post('/admin/tambah-buku-submit', [AdminTamanBacaController::class, 'store'])->name('admin_tambah_buku_submit');
Route::get('/admin/edit/buku/{id}', [AdminTamanBacaController::class, 'edit'])
    ->name('admin_edit_buku')
    ->middleware('admin:admin');
Route::post('/admin/edit-buku-submit/{id}', [AdminTamanBacaController::class, 'update'])->name('admin_edit_buku_submit');
Route::get('/admin/buku/delete/{id}', [AdminTamanBacaController::class, 'delete'])
    ->name('admin_hapus_buku')
    ->middleware('admin:admin');
Route::get('/admin/daftar-buku/search', [AdminTamanBacaController::class, 'search']);

/* CRUD Bagian Taman Baca ( PEMINJAMAN ) */
Route::get('/admin/daftar/peminjaman', [AdminTamanBacaController::class, 'daftar_peminjaman'])
    ->name('admin_daftar_peminjaman')
    ->middleware('admin:admin');
Route::get('/admin/tambah/peminjaman', [AdminTamanBacaController::class, 'tambah_data'])
    ->name('admin_tambah_peminjaman')
    ->middleware('admin:admin');
Route::post('/admin/tambah-peminjaman-submit', [AdminTamanBacaController::class, 'store_data'])->name('admin_tambah_peminjaman_submit');
Route::get('/admin/edit/peminjaman/{id}', [AdminTamanBacaController::class, 'edit_data'])
    ->name('admin_edit_peminjaman')
    ->middleware('admin:admin');
Route::post('/admin/edit-peminjaman-submit/{id}', [AdminTamanBacaController::class, 'update_data'])->name('admin_edit_peminjaman_submit');
Route::get('/admin/peminjaman/delete/{id}', [AdminTamanBacaController::class, 'delete_data'])
    ->name('admin_hapus_peminjaman')
    ->middleware('admin:admin');
Route::get('/admin/daftar-peminjaman/search_peminjaman', [AdminTamanBacaController::class, 'search_peminjaman']);

/* CRUD Bagian Kontak */
Route::get('/admin/daftar/kontak', [AdminkontakController::class, 'daftar_kontak'])
    ->name('admin_daftar_kontak')
    ->middleware('admin:admin');
Route::get('/admin/tambah/kontak', [AdminkontakController::class, 'tambah'])
    ->name('admin_tambah_kontak')
    ->middleware('admin:admin');
Route::post('/admin/tambah-kontak-submit', [AdminkontakController::class, 'store'])->name('admin_tambah_kontak_submit');
Route::get('/admin/edit/kontak/{id}', [AdminkontakController::class, 'edit'])
    ->name('admin_edit_kontak')
    ->middleware('admin:admin');
Route::post('/admin/edit-kontak-submit/{id}', [AdminkontakController::class, 'update'])->name('admin_edit_kontak_submit');
Route::get('/admin/kontak/delete/{id}', [AdminkontakController::class, 'delete'])
    ->name('admin_hapus_kontak')
    ->middleware('admin:admin');

/* CRUD Bagian Tim */
Route::get('/admin/daftar/tim', [AdminTimController::class, 'daftar_tim'])
    ->name('admin_daftar_tim')
    ->middleware('admin:admin');
Route::get('/admin/tambah/tim', [AdminTimController::class, 'tambah'])
    ->name('admin_tambah_tim')
    ->middleware('admin:admin');
Route::post('/admin/tambah-tim-submit', [AdminTimController::class, 'store'])->name('admin_tambah_tim_submit');
Route::get('/admin/edit/tim/{id}', [AdminTimController::class, 'edit'])
    ->name('admin_edit_tim')
    ->middleware('admin:admin');
Route::post('/admin/edit-tim-submit/{id}', [AdminTimController::class, 'update'])->name('admin_edit_tim_submit');
Route::get('/admin/tim/delete/{id}', [AdminTimController::class, 'delete'])
    ->name('admin_hapus_tim')
    ->middleware('admin:admin');
Route::get('/admin/daftar-tim/search', [AdminTimController::class, 'search']);






// Tim Status
Route::get('/admin/status/tim', [AdminStatusTimController::class, 'index'])
    ->name('admin_status_tim')
    ->middleware('admin:admin');
Route::post('/admin/status/tim/update', [AdminStatusTimController::class, 'store'])
    ->name('admin_status_tim_update')
    ->middleware('admin:admin');






// CRUD Bagian Kategori
Route::get('/admin/daftar-kategori', [AdminCategoryController::class, 'daftar_kategori'])->name('daftar_kategori')->middleware('admin:admin');
Route::get('/admin/tambah/kategori', [AdminCategoryController::class, 'tambah'])->name('tambah_kategori')->middleware('admin:admin');
Route::post('/admin/tambah-kategori-submit', [AdminCategoryController::class, 'store'])->name('tambah_kategori_submit');
Route::get('/admin/edit/kategori/{id}', [AdminCategoryController::class, 'edit'])->name('edit_kategori')->middleware('admin:admin');
Route::post('/admin/edit-kategori-submit/{id}', [AdminCategoryController::class, 'update'])->name('edit_kategori_submit');
Route::get('/admin/kategori/delete/{id}', [AdminCategoryController::class, 'delete'])->name('hapus_kategori')->middleware('admin:admin');
Route::get('/admin/daftar-kategori/search_kategori', [AdminCategoryController::class, 'search']);

>>>>>>> 92a017870e9646e091a83cf9105066685839d4a1
