<?php

use App\Http\Controllers\SiswaController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PengajarController;
use App\Http\Controllers\PekerjaanController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/siswa', [SiswaController::class, 'index'])->name('siswa.index');
Route::get('/siswa/create', [SiswaController::class, 'create'])->name('siswa.create');
Route::post('/siswa', [SiswaController::class, 'store'])->name('siswa.store');
Route::get('/siswa/{id}', [SiswaController::class, 'show'])->name('siswa.show');
Route::get('/siswa/{id}/edit', [SiswaController::class, 'edit'])->name('siswa.edit');
Route::put('/siswa/{id}', [SiswaController::class, 'update'])->name('siswa.update');
Route::delete('/siswa/{id}', [SiswaController::class, 'destroy'])->name('siswa.destroy');

route::get('/pengajar', [PengajarController::class, 'index']);
// Halaman daftar pekerjaan
Route::get('/pekerjaan', [PekerjaanController::class, 'index'])->name('pekerjaan.index');

// Form tambah pekerjaan
Route::get('/pekerjaan/create', [PekerjaanController::class, 'create'])->name('pekerjaan.create');

// Simpan pekerjaan baru
Route::post('/pekerjaan', [PekerjaanController::class, 'store'])->name('pekerjaan.store');

// Detail pekerjaan
Route::get('/pekerjaan/{id}', [PekerjaanController::class, 'show'])->name('pekerjaan.show');
