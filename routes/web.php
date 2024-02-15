<?php

use App\Http\Controllers\DonasiController;
use App\Http\Controllers\EducationController;
use App\Http\Controllers\SampahController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('pages.auth.login');
});

Route::get('/login', function () {
    return view('pages.auth.login');
})->name('login');

Route::get('/users', function () {
    return view('pages.users.index');
});

Route::get('/sampah', function () {
    return view('pages.sampah.sampah');
});

Route::get('/donasi', function () {
    return view('pages.donasis.donasi');
});

Route::get('/proses_donasi', function () {
    return view('pages.proses.proses_donasi');
});

Route::get('/proses_sampah', function () {
    return view('pages.proses.proses_sampah');
});

Route::get('/riwayat_donasi', function () {
    return view('pages.riwayat.riwayat_donasi');
});

Route::get('/riwayat_sampah', function () {
    return view('pages.riwayat.riwayat_sampah');
});

Route::get('/edukasi', function () {
    return view('pages.edukasis.edukasi');
});

Route::middleware(['auth'])->group(function () {
    Route::get('home', function(){
        return view ('pages.dashboard');
    })->name('home');
    Route::resource('users', UserController::class);

});


// verifikasi sampah ke proses sampah
Route::get('/proses_sampah',[SampahController::class, 'proses'])-> name('verifikasi_sampah');
Route::get('/riwayat_sampah',[SampahController::class, 'tolak'])-> name('tolak_sampah');

Route::get('/proses_donasi',[DonasiController::class, 'proses'])-> name('verifikasi_donasi');
Route::get('/riwayat_donasi',[DonasiController::class, 'tolak'])-> name('tolak_donasi');

Route::get('/edukasi', [EducationController::class, 'index'])->name('edukasis.edukasi');
