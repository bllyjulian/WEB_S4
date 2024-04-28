<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ApiDataUser;

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
});