<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Mobilink\AdminMobilinkController;
use App\Http\Controllers\Mobilink\TransaksiMobilinkController;
use App\Http\Controllers\LPController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\Admin\MobilController;
use App\Http\Controllers\Admin\TransaksiAdminController;
use App\Http\Controllers\Admin\DetailSewaController;
use App\Http\Controllers\Admin\ProfilAdminController;
use App\Http\Controllers\Admin\CustomerAdminController;
use App\Http\Controllers\Admin\DashboardAdminController;

// Public routes
Route::get('/', [LPController::class, 'index'])->name('index');
Route::get('/about', [LPController::class, 'about'])->name('about');
Route::get('/features', [LPController::class, 'features'])->name('features');
Route::get('/faq', [LPController::class, 'faq'])->name('faq-nav');
Route::get('/contact', [LPController::class, 'contact'])->name('contact');
Route::get('/privacy-policy', [LPController::class, 'pp'])->name('pp');

// Authentication routes
Route::prefix('auth')->group(function () {
    Route::get('/login', [LoginController::class, 'index'])->name('login.index');
    Route::get('/daftar', [LoginController::class, 'halamandaftar'])->name('login.daftar');
    Route::post('/login', [LoginController::class, 'proseslogin'])->name('proseslogin');
    Route::post('/daftar', [LoginController::class, 'daftar'])->name('prosesdaftar');
});

Route::middleware(['auth'])->group(function () {
    Route::prefix('mobilink')->group(function () {
        Route::prefix('dashboard')->group(function () {
            Route::get('', [AdminMobilinkController::class, 'index'])->name('mobilink.dashboard');
        });
        Route::prefix('mitra')->group(function () {
            Route::get('', [AdminMobilinkController::class, 'mitra'])->name('mobilink.mitra');
            Route::post('ban/{username}', [AdminMobilinkController::class, 'banAkun'])->name('mobilink.mitra.banned');
            Route::post('setujui/{username}', [AdminMobilinkController::class, 'aktifkanAkun'])->name('mobilink.mitra.setujui');
            Route::post('tolak/{username}', [AdminMobilinkController::class, 'tolakAkun'])->name('mobilink.mitra.tolak');
        });
        Route::prefix('transaksi')->group(function () {
            Route::get('', [TransaksiMobilinkController::class, 'index'])->name('mobilink.transaksi');
            Route::post('setujui/{id_transaksi}', [TransaksiMobilinkController::class, 'setujuTransaksi'])->name('mobilink.transaksi.setujui');
            Route::post('tolak/{id_transaksi}', [TransaksiMobilinkController::class, 'tolakTransaksi'])->name('mobilink.transaksi.tolak');
        });        
    });

    Route::prefix('admin')->group(function () {
        Route::prefix('dashboard')->group(function () {
            Route::get('', [DashboardAdminController::class, 'index'])->name('admin.dashboard');
        });
        Route::prefix('customer')->group(function () {
            Route::get('', [CustomerAdminController::class, 'customer'])->name('admin.customer');
        });
        Route::prefix('orderan')->group(function () {
            Route::get('', [TransaksiAdminController::class, 'index'])->name('admin.orderan');
        });
        Route::prefix('data-mobil')->group(function () {
            Route::get('', [MobilController::class, 'index'])->name('admin.mobil');
            Route::get('tambahmobil', [MobilController::class, 'create'])->name('admin.mobil.tambahmobil');
            Route::get('editmobil/{id_mobil}', [MobilController::class, 'edit'])->name('admin.mobil.editmobil');
            Route::post('tambahmobil', [MobilController::class, 'store'])->name('admin.mobil.store');
            Route::put('updatemobil/{id_mobil}', [MobilController::class, 'update'])->name('admin.mobil.update');
            Route::delete('hapus/{id_mobil}', [MobilController::class, 'hapus'])->name('admin.mobil.hapus');
        });
        
        Route::prefix('detail-sewa')->group(function () {
            Route::get('', [DetailSewaController::class, 'index'])->name('admin.detailsewa');
            Route::get('/detailsewa/{id}', [DetailSewaController::class, 'detail'])->name('admin.detailsewa.riwayatsewa');
            Route::get('/detailsewa/{id}/location', [DetailSewaController::class, 'getLatitudeLongitude'])->name('admin.detailsewa.location');
        });
        Route::prefix('profil')->group(function () {
            Route::get('', [ProfilAdminController::class, 'index'])->name('admin.profil');
            Route::post('/update-logo-mitra', [ProfilAdminController::class, 'updateLogoMitra'])->name('update-logo-mitra');
        });
    });

    Route::view('button-builder', 'perk-ui.button-builder')->name('button-builder');
    
    Route::get('/refresh', function () {
        Artisan::call('config:clear');
        Artisan::call('cache:clear');
        Artisan::call('route:clear');
        return 'Done bg';
    });
});
Route::middleware(['auth'])->get('/test', function () {
    return "You are authenticated";
});
Route::post('/logout', function () {
    Auth::logout();
    request()->session()->invalidate();
    request()->session()->regenerateToken();
    return redirect('/auth/login');
})->name('logout');