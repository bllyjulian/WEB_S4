<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Session;
use App\Http\Controllers\AdminMitraController;
use App\Http\Controllers\AdminMobilinkController;
use App\Http\Controllers\LPController;



// Route::get('/', function(){
//     return redirect()->route('index');
// })->name('/');


Route::get('/', [LPController::class, 'index'])->name('index');
Route::get('/about', [LPController::class, 'about'])->name('about');
Route::get('/features', [LPController::class, 'features'])->name('features');
Route::get('/faq', [LPController::class, 'faq'])->name('faq-nav');
Route::get('/contact', [LPController::class, 'contact'])->name('contact');
Route::get('/privacy-policy', [LPController::class, 'pp'])->name('pp');

Route::prefix('admin')->group(function () {
    Route::view('dashboard', 'admin.dashboard')->name('dashboard');
    Route::view('mitra', 'admin.mitra')->name('mitra');
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
        Route::get('', [AdminMitraController::class, 'mobil'])->name('admin.mobil');
    });
    Route::prefix('inbox')->group(function () {
        Route::get('', [AdminMitraController::class, 'inbox'])->name('admin.inbox');
    });
    // Menempatkan rute berikut di dalam grup 'detail-sewa'
    Route::prefix('detail-sewa')->group(function () {
        Route::get('', [AdminMitraController::class, 'sewa'])->name('admin.detailsewa');
        Route::get('riwayatsewa', [AdminMitraController::class, 'riwayatsewa'])->name('admin.detailsewa.riwayatsewa');
    });
});

Route::view('button-builder', 'perk-ui.button-builder')->name('button-builder');
// Route::view('state-color', 'ui-elements.state-color')->name('state-color');
// Route::view('typography', 'ui-elements.typography')->name('typography');