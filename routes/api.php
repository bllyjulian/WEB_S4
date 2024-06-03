<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\api\ApiDataUser;
use App\Http\Controllers\api\ApiDataMitra;
use App\Http\Controllers\api\ApiDataMobil;
use App\Http\Controllers\api\ApiDataTransaksi;
use App\Http\Controllers\api\ApiDataJenisPembayaran;

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


$token = 'billy123';

Route::prefix($token)->group(function () {
    Route::get('/users', [ApiDataUser::class, 'index']);
    Route::get('/users/{username_mb}', [ApiDataUser::class, 'show']);
    Route::post('/users', [ApiDataUser::class, 'store']);
    Route::put('/users/{username_mb}', [ApiDataUser::class, 'update']);
    Route::delete('/users/{username_mb}', [ApiDataUser::class, 'destroy']);

    Route::get('/mitra', [ApiDataMitra::class, 'index']);
    Route::get('/mitra/{username}', [ApiDataMitra::class, 'show']);

    Route::get('/mobil', [ApiDataMobil::class, 'index']);
    Route::get('/mobil/{username}', [ApiDataMobil::class, 'show']);

    Route::post('/transaksi', [ApiDataTransaksi::class, 'store']);
    Route::post('/upload-bukti', [ApiDataTransaksi::class, 'update']);

    Route::get('/jenis-pembayaran', [ApiDataJenisPembayaran::class, 'index']);
    Route::get('/jenis-pembayaran/{id_jenis}', [ApiDataJenisPembayaran::class, 'show']);
});
