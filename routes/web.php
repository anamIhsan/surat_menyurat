<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\kelola_surat\DisposisiController;
use App\Http\Controllers\kelola_surat\SuratMasukController;
use App\Http\Controllers\LoginController;
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

//<!-- fussilat / sa'ad al-gamidi / :12: -->