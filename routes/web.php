<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HRDController;
use Illuminate\Container\Attributes\Auth;
use App\Http\Controllers\GudangController;
use App\Http\Controllers\KeuanganController;
use App\Http\Controllers\ProduksiController;
use App\Http\Controllers\PurchasingController;
use App\Http\Controllers\AuthenticationController;
use App\Http\Middleware\HakAksesUser;


// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('landing');
});

Route::get('/login',[AuthenticationController::class, 'index'])->name('login');
Route::post('/loginprocess',[AuthenticationController::class, 'authentication'])->name('login_process');




Route::get('/backdoor/login', function () {
    $title = 'Developer Login';
    return view('AuthenticationPages.devlogs', compact('title'));
});


    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::middleware(['access:MANAGER GUDANG'])->group(function () {
        Route::get('/gudang/manager', [GudangController::class, 'index'])->name('gudang.manager');
    });
    Route::middleware(['access:ADMIN GUDANG'])->group(function () {
        Route::get('/gudang/admin', [GudangController::class, 'index'])->name('gudang.admin');
    });
    Route::middleware(['access:STAFF GUDANG'])->group(function () {
        Route::get('/gudang/staff', [GudangController::class, 'index'])->name('gudang.staff');
    });

    // **ROUTE UNTUK PURCHASING**
    Route::middleware(['access:MANAGER_PURCHASING'])->group(function () {
        Route::get('/purchasing/manager', [PurchasingController::class, 'index'])->name('purchasing.manager');
    });
    Route::middleware(['access:ADMIN PURCHASING'])->group(function () {
        Route::get('/purchasing/admin', [PurchasingController::class, 'index'])->name('purchasing.admin');
    });
    Route::middleware(['access:STAFF PURCHASING'])->group(function () {
        Route::get('/purchasing/staff', [PurchasingController::class, 'index'])->name('purchasing.staff');
    });

    // **ROUTE UNTUK PRODUKSI**
    Route::middleware(['auth','access:MANAGER PRODUKSI'])->group(function () {
        Route::get('/produksi/manager', [ProduksiController::class, 'index'])->name('produksi.manager');
    });
    Route::middleware(['access:ADMIN PRODUKSI'])->group(function () {
        Route::get('/produksi/admin', [ProduksiController::class, 'index'])->name('produksi.admin');
    });
    Route::middleware(['access:STAFF PRODUKSI'])->group(function () {
        Route::get('/produksi/staff', [ProduksiController::class, 'index'])->name('produksi.staff');
    });

    // **ROUTE UNTUK HRD**
    Route::middleware(['access:MANAGER HRD'])->group(function () {
        Route::get('/hrd/manager', [HRDController::class, 'index'])->name('hrd.manager');
    });
    Route::middleware(['access:ADMIN HRD'])->group(function () {
        Route::get('/hrd/admin', [HRDController::class, 'index'])->name('hrd.admin');
    });
    Route::middleware(['access:STAFF HRD'])->group(function () {
        Route::get('/hrd/staff', [HRDController::class, 'index'])->name('hrd.staff');
    });

    // **ROUTE UNTUK KEUANGAN**
    Route::middleware(['auth','access:MANAGER KEUANGAN'])->group(function () {
        Route::get('/keuangan/manager', [KeuanganController::class, 'index'])->name('keuangan.manager');
    });
    Route::middleware(['auth','access:ADMIN KEUANGAN'])->group(function () {
        Route::get('/keuangan/admin', [KeuanganController::class, 'index'])->name('keuangan.admin');
    });
    Route::middleware(['auth','access:STAFF KEUANGAN'])->group(function () {
        Route::get('/keuangan/staff', [KeuanganController::class, 'index'])->name('keuangan.staff');
    });

    Route::get('/logout',[AuthenticationController::class, 'logout'])->name('logout');

Route::get('/page_not_found', function () {
    $title = '404 | PAGE NOT FOUND';
    return view('dumps.404', compact('title'));
})->name('404');

Route::fallback(function () {
    return redirect()->route('404');
});
