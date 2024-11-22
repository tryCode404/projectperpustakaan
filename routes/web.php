<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BukuController;
use App\Http\Controllers\AnggotaController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\CetakLaporanController;
use App\Http\Controllers\PengembalianController;
use App\Http\Controllers\RiwayatPinjamController;
use App\Http\Controllers\Auth\ForgotPasswordController;

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
    return view('auth.login'); // Pilih ini jika aplikasi Anda menggunakan login
    // return view('welcome'); // Pilih ini jika ingin menampilkan halaman default Laravel
});

Auth::routes();

Route::middleware(['auth'])->group(function () {
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index']);
    Route::resource('kategori', KategoriController::class);
    Route::resource('buku', BukuController::class);
    Route::resource('anggota', AnggotaController::class);
    Route::resource('profile', ProfileController::class)->only(['index', 'update', 'edit']);
    Route::resource('peminjaman', RiwayatPinjamController::class);
    Route::get('/cetaklaporan', CetakLaporanController::class);
    Route::get('/pengembalian', [PengembalianController::class, 'index']);
    Route::post('/pengembalian', [PengembalianController::class, 'pengembalian']);

    Route::get('/cetak-laporan', CetakLaporanController::class)->name('cetak.laporan');
    Route::post('/password/email', [ForgotPasswordController::class, 'sendResetLinkEmail'])->name('password.email');
});
