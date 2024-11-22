<?php

<<<<<<< HEAD
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
=======
use Illuminate\Support\Facades\Route;
>>>>>>> 97ed3b48d82bc4a41e8196552fc7eb7a64bb4bf7

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
<<<<<<< HEAD
    return view('auth.login');
});

Auth::routes();
Route::middleware(['auth'])->group(function () {

    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index']);
    Route::resource('kategori', KategoriController::class);

    Route::resource('buku', BukuController::class);

    Route::resource('anggota', AnggotaController::class);

    Route::resource('profile', ProfileController::class)->only('index', 'update', 'edit');

    Route::resource('peminjaman', RiwayatPinjamController::class);

    Route::get('/cetaklaporan', CetakLaporanController::class);

    Route::get('/pengembalian', [PengembalianController::class, 'index']);

    Route::post('/pengembalian', [PengembalianController::class, 'pengembalian']);
=======
    return view('welcome');
>>>>>>> 97ed3b48d82bc4a41e8196552fc7eb7a64bb4bf7
});
