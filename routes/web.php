<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\kelola_surat\DisposisiController;
use App\Http\Controllers\kelola_surat\SuratKeluarController;
use App\Http\Controllers\kelola_surat\SuratMasukController;
use App\Http\Controllers\laporan_surat\SuratKeluarController as Laporan_suratSuratKeluarController;
use App\Http\Controllers\laporan_surat\SuratMasukController as Laporan_suratSuratMasukController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\master_surat\KlasifikasiSuratController;
use App\Http\Controllers\master_surat\MasterHarapController;
use App\Http\Controllers\master_surat\SifatSuratController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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

// Auth
Route::get('/', [LoginController::class, 'login'])
    ->name('login');
// Route::post('/authenticate', [LoginController::class, 'authenticate'])
//     ->name('authenticate');
// Route::post('logout', [LoginController::class, 'logout'])->name('logout');

// Route::middleware(['auth'])->group(function () {

    // Dasboard
    Route::get('/dashboard', [DashboardController::class, 'index'])
        ->name('dashboard');

    //                      <-- Master Surat -->

    // Klasifikasi Surat
    Route::prefix('master-surat/klasifikasi-surat')->group(function () {

        Route::get('/', [KlasifikasiSuratController::class, 'index'])
            ->name('master_surat-klasifikasi_surat');
        
        Route::get('/create', [KlasifikasiSuratController::class, 'create'])
            ->name('master_surat-klasifikasi_surat_create');
        Route::post('/store', [KlasifikasiSuratController::class, 'store'])
            ->name('master_surat-klasifikasi_surat_store');
        
        Route::get('/edit', [KlasifikasiSuratController::class, 'edit'])
            ->name('master_surat-klasifikasi_surat_edit');
        Route::put('/update', [KlasifikasiSuratController::class, 'update'])
            ->name('master_surat-klasifikasi_surat_update');

        Route::delete('/delete', [KlasifikasiSuratController::class, 'destroy'])
            ->name('master_surat-klasifikasi_surat_delete');

    });

    // Sifat Surat
    Route::prefix('master-surat/sifat-surat')->group(function () {

        Route::get('/', [SifatSuratController::class, 'index'])
            ->name('master_surat-sifat_surat');
        
        Route::get('/create', [SifatSuratController::class, 'create'])
            ->name('master_surat-sifat_surat_create');
        Route::post('/store', [SifatSuratController::class, 'store'])
            ->name('master_surat-sifat_surat_store');
        
        Route::get('/edit', [SifatSuratController::class, 'edit'])
            ->name('master_surat-sifat_surat_edit');
        Route::put('/update', [SifatSuratController::class, 'update'])
            ->name('master_surat-sifat_surat_update');

        Route::delete('/delete', [SifatSuratController::class, 'destroy'])
            ->name('master_surat-sifat_surat_delete');

    });

    // Master Harap
    Route::prefix('master-surat/master-harap')->group(function () {

        Route::get('/', [MasterHarapController::class, 'index'])
            ->name('master_surat-master_harap');
        
        Route::get('/create', [MasterHarapController::class, 'create'])
            ->name('master_surat-master_harap_create');
        Route::post('/store', [MasterHarapController::class, 'store'])
            ->name('master_surat-master_harap_store');
        
        Route::get('/edit', [MasterHarapController::class, 'edit'])
            ->name('master_surat-master_harap_edit');
        Route::put('/update', [MasterHarapController::class, 'update'])
            ->name('master_surat-master_harap_update');

        Route::delete('/delete', [MasterHarapController::class, 'destroy'])
            ->name('master_surat-master_harap_delete');

    });

    //                      <-- Kelola Surat -->

    // Surat Masuk
    Route::prefix('kelola-surat/surat-masuk')->group(function () {

        Route::get('/', [SuratMasukController::class, 'index'])
            ->name('kelola_surat-surat_masuk');
        
        Route::get('/create', [SuratMasukController::class, 'create'])
            ->name('kelola_surat-surat_masuk_create');
        Route::post('/store', [SuratMasukController::class, 'store'])
            ->name('kelola_surat-surat_masuk_store');
        
        Route::get('/edit', [SuratMasukController::class, 'edit'])
            ->name('kelola_surat-surat_masuk_edit');
        Route::put('/update', [SuratMasukController::class, 'update'])
            ->name('kelola_surat-surat_masuk_update');

        Route::delete('/delete', [SuratMasukController::class, 'destroy'])
            ->name('kelola_surat-surat_masuk_delete');

        // Disposisi
        Route::get('/disposisi', [DisposisiController::class, 'index'])
            ->name('kelola_surat-disposisi');
        Route::get('/disposisi/edit', [DisposisiController::class, 'edit'])
            ->name('kelola_surat-disposisi_edit');
        Route::delete('/disposisi', [DisposisiController::class, 'destroy'])
            ->name('kelola_surat-disposisi_delete');

    });

    // Surat Keluar
    Route::prefix('kelola-surat/surat-keluar')->group(function () {

        Route::get('/', [SuratKeluarController::class, 'index'])
            ->name('kelola_surat-surat_keluar');
        
        Route::get('/create', [SuratKeluarController::class, 'create'])
            ->name('kelola_surat-surat_keluar_create');
        Route::post('/store', [SuratKeluarController::class, 'store'])
            ->name('kelola_surat-surat_keluar_store');
        
        Route::get('/edit', [SuratKeluarController::class, 'edit'])
            ->name('kelola_surat-surat_keluar_edit');
        Route::put('/update', [SuratKeluarController::class, 'update'])
            ->name('kelola_surat-surat_keluar_update');

        Route::delete('/delete', [SuratKeluarController::class, 'destroy'])
            ->name('kelola_surat-surat_keluar_delete');

    });

    //                      <-- Laporan Surat -->

    // Surat Masuk
    Route::prefix('laporan-surat/surat-masuk')->group(function () {

        Route::get('/', [Laporan_suratSuratMasukController::class, 'index'])
            ->name('laporan_surat-surat_masuk');
        
        Route::get('/create', [Laporan_suratSuratMasukController::class, 'create'])
            ->name('laporan_surat-surat_masuk_create');
        Route::post('/store', [Laporan_suratSuratMasukController::class, 'store'])
            ->name('laporan_surat-surat_masuk_store');
        
        Route::get('/edit', [Laporan_suratSuratMasukController::class, 'edit'])
            ->name('laporan_surat-surat_masuk_edit');
        Route::put('/update', [Laporan_suratSuratMasukController::class, 'update'])
            ->name('laporan_surat-surat_masuk_update');

        Route::delete('/delete', [Laporan_suratSuratMasukController::class, 'destroy'])
            ->name('laporan_surat-surat_masuk_delete');

    });

    // Surat Keluar
    Route::prefix('laporan-surat/surat-keluar')->group(function () {

        Route::get('/', [Laporan_suratSuratKeluarController::class, 'index'])
            ->name('laporan_surat-surat_keluar');
        
        Route::get('/create', [Laporan_suratSuratKeluarController::class, 'create'])
            ->name('laporan_surat-surat_keluar_create');
        Route::post('/store', [Laporan_suratSuratKeluarController::class, 'store'])
            ->name('laporan_surat-surat_keluar_store');
        
        Route::get('/edit', [Laporan_suratSuratKeluarController::class, 'edit'])
            ->name('laporan_surat-surat_keluar_edit');
        Route::put('/update', [Laporan_suratSuratKeluarController::class, 'update'])
            ->name('laporan_surat-surat_keluar_update');

        Route::delete('/delete', [Laporan_suratSuratKeluarController::class, 'destroy'])
            ->name('laporan_surat-surat_keluar_delete');

    });

    // Pengguna Sistem
    Route::prefix('pengguna')->group(function () {

        Route::get('/', [UserController::class, 'index'])
            ->name('pengguna');
        
        Route::get('/create', [UserController::class, 'create'])
            ->name('pengguna_create');
        Route::post('/store', [UserController::class, 'store'])
            ->name('pengguna_store');

        Route::get('/edit', [UserController::class, 'edit'])
            ->name('pengguna_edit');
        Route::put('/update', [UserController::class, 'update'])
            ->name('pengguna_update');

        Route::delete('/delete', [UserController::class, 'destroy'])
            ->name('pengguna_delete');

    });
// });

//<!-- al-muminuun / abdullah al-mathruud / :11: -->
