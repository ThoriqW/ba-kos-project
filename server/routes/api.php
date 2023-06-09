<?php

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\V1\SkillController;

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

Route::group(['prefix' => 'v1'], function () {

    Route::apiResource('skills', SkillController::class);
});

Route::get('/users', function () {
    $users = User::all();
    return $users;
});

Route::post('/users', function (Request $request) {
    // Validasi input dari request
    $request->validate([
        'name' => 'required',
        'email' => 'required|email|unique:users',
        'phone_number' => 'required|unique:users',
        'password' => 'required|min:6',
    ]);

    // Membuat objek User baru
    $user = new User;
    $user->name = $request->input('name');
    $user->email = $request->input('email');
    $user->phone_number = $request->input('phone_number');
    $user->password = bcrypt($request->input('password'));

    // Menyimpan data pengguna ke database
    $user->save();

    // Mengembalikan response sukses dengan data pengguna yang baru ditambahkan
    return response()->json([
        'message' => 'User created successfully',
        'user' => $user
    ], 201);
});

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
