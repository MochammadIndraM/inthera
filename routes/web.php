<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\CfPakarController;
use App\Http\Controllers\DeteksiController;
use App\Http\Controllers\GejalaController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PenyakitController;
use App\Http\Controllers\PertanyaanController;

Route::get('/', function () {
    return view('index');
});
Route::get('/cara-deteksi', function () {
    return view('cara-deteksi');
});

Route::get('/tentang', function () {
    return view('tentang');
});

Route::get('/admin', function () {
    return redirect()->route('login');
});

Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LogoutController::class, 'logout'])->name('logout');

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', function () {
        return view('master-data.dashboard');
    })->name('dashboard');

    Route::get('/data-penyakit', [PenyakitController::class, 'index'])->name('data-penyakit');
    Route::post('/data-penyakit', [PenyakitController::class, 'store'])->name('penyakit.store');
    Route::put('/data-penyakit/{kode_penyakit}', [PenyakitController::class, 'update'])->name('penyakit.update');
    Route::delete('/data-penyakit/{kode_penyakit}', [PenyakitController::class, 'destroy'])->name('penyakit.destroy');

    Route::get('/data-gejala', [GejalaController::class, 'index'])->name('data-gejala');
    Route::post('/data-gejala', [GejalaController::class, 'store'])->name('gejala.store');
    Route::put('/data-gejala/{kode_gejala}', [GejalaController::class, 'update'])->name('gejala.update');
    Route::delete('/data-gejala/{kode_gejala}', [GejalaController::class, 'destroy'])->name('gejala.destroy');

    Route::get('/data-pertanyaan', [PertanyaanController::class, 'index'])->name('data-pertanyaan');
    Route::post('/data-pertanyaan', [PertanyaanController::class, 'store'])->name('pertanyaan.store');
    Route::put('/data-pertanyaan/{kode_gejala}', [PertanyaanController::class, 'update'])->name('pertanyaan.update');
    Route::delete('/data-pertanyaan/{kode_gejala}', [PertanyaanController::class, 'destroy'])->name('pertanyaan.destroy');

    Route::get('/bobot-pakar', [CfPakarController::class, 'index'])->name('cf-pakar.index');
});


Route::get('/deteksi', [DeteksiController::class, 'index'])->name('deteksi.index');
Route::post('/deteksi', [DeteksiController::class, 'process'])->name('deteksi.store');
