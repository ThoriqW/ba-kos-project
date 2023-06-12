<?php

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\MitraController;
use App\Http\Controllers\UserProfileController;
use App\Http\Controllers\KosController;
use App\Http\Controllers\KosPhotoController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::prefix('v1')->group(function () {
    Route::apiResource('users', UserController::class);
    Route::apiResource('mitras', MitraController::class);
    Route::apiResource('user-profiles', UserProfileController::class);
    Route::apiResource('kos', KosController::class);
    Route::apiResource('kos-photo', KosPhotoController::class);
});

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });
