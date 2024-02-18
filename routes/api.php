<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DonasiController;
use App\Http\Controllers\EducationController;
use App\Http\Controllers\RiwayatController;

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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::post('register', [AuthController::class, 'register']);
Route::post('login', [AuthController::class, 'login']);
Route::middleware('auth:api')->group(function () {
    Route::post('edit-profile', [AuthController::class, 'editProfile']);
    Route::get('user', [AuthController::class, 'getUserInfo']);
});

Route::middleware('auth:api')->group(function () {
    Route::post('donasi/add', [DonasiController::class, 'add']);
    Route::get('donasi/getlist', [DonasiController::class, 'getlist']);
    Route::get('donasi/detail/{id}', [DonasiController::class, 'detail']);
});

Route::middleware('auth:api')->group(function () {
    Route::get('edukasi/getlist', [EducationController::class, 'getlist']);
    Route::get('edukasi/detail/{id}', [EducationController::class, 'detail']);
});

Route::middleware('auth:api')->group(function () {
    Route::get('riwayat/donasi/getlist', [RiwayatController::class, 'getListDonasi']);
    Route::get('riwayat/donasi/detail/{id}', [RiwayatController::class, 'getDetailDonasi']);
    Route::get('riwayat/sampah/detail/{id}', [RiwayatController::class, 'getDetailSampah']);
    Route::get('riwayat/sampah/getlist', [RiwayatController::class, 'getListSampah']);
});