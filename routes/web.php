<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ArsipController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('admin.login');
});

/*CSS*/
Route::get('/css/style.css', function () {
    return response(file_get_contents(public_path('assets/css/style.css')))->header('Content-Type', 'text/css');
});
Route::get('/css/sb-admin-2.css', function () {
    return response(file_get_contents(public_path('assets/css/sb-admin-2.css')))->header('Content-Type', 'text/css');
});
Route::get('/css/sb-admin-2.min.css', function () {
    return response(file_get_contents(public_path('assets/css/sb-admin-2.min.css')))->header('Content-Type', 'text/css');
});
Route::get('/fontawesome-free/css/all.min.css', function () {
    return response(file_get_contents(public_path('vendor/fontawesome-free/css/all.min.css')))->header('Content-Type', 'text/css');
});
Route::get('/img/logo-login.png', function () {
    return response(file_get_contents(public_path('assets/img/logo-login.png')))->header('Content-Type', 'file/png');
});
Route::get('/img/logo-sidebar.png', function () {
    return response(file_get_contents(public_path('assets/img/logo-sidebar.png')))->header('Content-Type', 'file/png');
});
Route::get('/img/aku.png', function () {
    return response(file_get_contents(public_path('assets/img/aku.png')))->header('Content-Type', 'file/png');
});

    Route::middleware(['guest'])->group(function(){
   
        Route::get('admin', [SessionController::class, 'login'])-> name('masuk');
        Route::get('/register', [SessionController::class, 'register'])-> name('register');
        Route::post('create-admin', [SessionController::class, 'createUser'])-> name('create-admin');
        Route::post('/session', [SessionController::class, 'store'])-> name('login');


    });

    Route::middleware(['auth'])->group(function(){
        Route::get('/logout', [SessionController::class, 'destroy'])-> name('logout');
        
    
        Route::get('data-arsip', [ArsipController::class, 'indexArsip'])-> name('data-arsip');
        Route::get('data-kategori', [ArsipController::class, 'indexKategori'])-> name('data-kategori');
        Route::get('unggah', [ArsipController::class, 'arsipSurat'])-> name('unggah');
        Route::get('about', [ArsipController::class, 'about'])-> name('about');
        Route::get('buat-kategori', [ArsipController::class, 'buatKategori'])-> name('tambah');
        Route::get('/kategori/edit/{id_kategori}', [ArsipController::class, 'editKategori']) -> name('kategori.edit');
        // web.php
        Route::get('/lihat-surat/{id}', [ArsipController::class, 'lihatSurat'])->name('arsip.lihat-surat');

        Route::post('/arsip/hapus/{no_surat}', [ArsipController::class, 'hapusArsip']) -> name('arsip.hapus');
        Route::post('/kategori/hapus/{id_kategori}', [ArsipController::class, 'hapusKategori']) -> name('kategori.hapus');
        Route::post('unggah-surat', [ArsipController::class, 'unggahSurat'])-> name('unggah.surat');
        Route::post('tambah-kategori', [ArsipController::class, 'tambahKategori'])-> name('tambah.kategori');
        Route::post('/kategori/update/{id_kategori}', [ArsipController::class, 'updateKategori']) -> name('kategori.update-kategori');
        Route::get('/arsip/cari', [ArsipController::class, 'cariArsip'])->name('arsip.cari');
        Route::get('/kategori/cari', [ArsipController::class, 'cariKategori'])->name('kategori.cari');
        
    });
   