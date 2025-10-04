<?php

use App\Http\Controllers\PekerjaanController;
use App\Http\Controllers\PengajarController;
use App\Http\Controllers\SiswaController;
use Illuminate\Support\Facades\Route;

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

Route::get('/pekerjaan', [PekerjaanController::class, 'index'])->name('pekerjaan.index');
Route::get('/pekerjaan/create', [PekerjaanController::class, 'create'])->name('pekerjaan.create');
Route::post('/pekerjaan', [PekerjaanController::class, 'store'])->name('pekerjaan.store');
Route::get('/pekerjaan/{id}', [PekerjaanController::class, 'show'])->name('pekerjaan.show');

route::get('/pengajar', [PengajarController::class, 'index']);
