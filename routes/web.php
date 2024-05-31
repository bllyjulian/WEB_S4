<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Session;
use App\Http\Controllers\AdminMitraController;
use App\Http\Controllers\AdminMobilinkController;
use App\Http\Controllers\LPController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MobilController;
use App\Http\Controllers\DetailSewaController;
use App\Http\Controllers\AuthController;



// Route::get('/', function(){
//     return redirect()->route('index');
// })->name('/');


Route::get('/', [LPController::class, 'index'])->name('index');
Route::get('/about', [LPController::class, 'about'])->name('about');
Route::get('/features', [LPController::class, 'features'])->name('features');
Route::get('/faq', [LPController::class, 'faq'])->name('faq-nav');
Route::get('/contact', [LPController::class, 'contact'])->name('contact');
Route::get('/privacy-policy', [LPController::class, 'pp'])->name('pp');


Route::prefix('auth')->group(function () {
    Route::get('/login', [LoginController::class, 'index'])->name('login.index');
    Route::get('/daftar', [LoginController::class, 'halamandaftar'])->name('login.daftar');
    Route::post('/login', [LoginController::class, 'proseslogin'])->name('proseslogin');
    Route::post('/daftar', [LoginController::class, 'daftar'])->name('prosesdaftar');
});
Route::prefix('mobilink')->group(function () {
    Route::prefix('dashboard')->group(function () {
        Route::get('', [AdminMobilinkController::class, 'index'])->name('mobilink.dashboard');
    });
    Route::prefix('mitra')->group(function () {
        Route::get('', [AdminMobilinkController::class, 'mitra'])->name('mobilink.mitra');
    });
});
Route::prefix('admin')->group(function () {
    Route::prefix('dashboard')->group(function () {
        Route::get('', [AdminMitraController::class, 'index'])->name('admin.dashboard');
    });
    Route::prefix('customer')->group(function () {
        Route::get('', [AdminMitraController::class, 'customer'])->name('admin.customer');
    });
    Route::prefix('orderan')->group(function () {
        Route::get('', [AdminMitraController::class, 'orderan'])->name('admin.orderan');
    });
    Route::prefix('data-mobil')->group(function () {
        Route::get('', [MobilController::class, 'index'])->name('admin.mobil');
        Route::get('tambahmobil', [MobilController::class, 'create'])->name('admin.mobil.tambahmobil');
        Route::get('editmobil/{id_mobil}', [MobilController::class, 'edit'])->name('admin.mobil.editmobil');
        Route::post('tambahmobil', [MobilController::class, 'store'])->name('admin.mobil.store');
        Route::put('updatemobil/{id_mobil}', [MobilController::class, 'update'])->name('admin.mobil.update');
        Route::delete('hapus/{id_mobil}', [MobilController::class, 'hapus'])->name('admin.mobil.hapus');
    });
    
    Route::prefix('inbox')->group(function () {
        Route::get('', [AdminMitraController::class, 'inbox'])->name('admin.inbox');
    });
    Route::prefix('detail-sewa')->group(function () {
        Route::get('', [DetailSewaController::class, 'index'])->name('admin.detailsewa');
        Route::get('/detailsewa/{id}', [DetailSewaController::class, 'detail'])->name('admin.detailsewa.riwayatsewa');
        Route::get('/detailsewa/{id}/location', [DetailSewaController::class, 'getLatitudeLongitude'])->name('admin.detailsewa.location');
    });
    
});

Route::view('button-builder', 'perk-ui.button-builder')->name('button-builder');
// Route::view('state-color', 'ui-elements.state-color')->name('state-color');
// Route::view('typography', 'ui-elements.typography')->name('typography');
Route::get('/refresh', function () {
    Artisan::call('config:clear');
    Artisan::call('cache:clear');
    return 'Configuration and cache cleared.';
});