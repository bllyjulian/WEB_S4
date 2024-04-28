<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ApiDataUser;

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::prefix('users')->group(function () {
    Route::get('/', [ApiDataUser::class, 'index']);
    Route::get('/{username_mb}', [ApiDataUser::class, 'show']);
    Route::post('/', [ApiDataUser::class, 'store']);
    Route::put('/{username_mb}', [ApiDataUser::class, 'update']);
    Route::delete('/{username_mb}', [ApiDataUser::class, 'destroy']);
});
