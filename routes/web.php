<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DataFakultasController;
use App\Http\Controllers\DataProdiController;
use App\Http\Controllers\DataMahasiswaController;

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
// route untuk halaman utama

Route::get('/',[App\http\Controllers\DashboardController::class,"index"])->name('dashboard.index');

// routes untuk data fakultas
Route::get('/datafakultas', [DataFakultasController::class, 'index'])->name('datafakultas.index');
Route::post('/datafakultas', [DataFakultasController::class, 'store'])->name('fakultas.store');
Route::get('/datafakultas/create', [DataFakultasController::class, 'create'])->name('datafakultas.create');
Route::get('/datafakultas/{id}', [DataFakultasController::class, 'show'])->name('datafakultas.show');
Route::get('/datafakultas/{id}/edit', [DataFakultasController::class, 'edit'])->name('datafakultas.edit');
Route::put('/datafakultas/{id}', [DataFakultasController::class, 'update'])->name('datafakultas.update');
Route::delete('/datafakultas/{id}', [DataFakultasController::class, 'destroy'])->name('datafakultas.destroy');

// routes untuk data prodi
Route::get('/dataprodi', [DataProdiController::class, 'index'])->name('dataprodi.index');
Route::post('/dataprodi', [DataProdiController::class, 'store'])->name('prodi.store');
Route::get('/dataprodi/create2', [DataProdiController::class, 'create'])->name('dataprodi.create');
Route::get('/dataprodi/{id}', [DataProdiController::class, 'show'])->name('dataprodi.show');
Route::get('/dataprodi/{id}/edit2', [DataProdiController::class, 'edit'])->name('dataprodi.edit');
Route::put('/dataprodi/{id}', [DataProdiController::class, 'update'])->name('dataprodi.update');
Route::delete('/dataprodi/{id}', [DataProdiController::class, 'destroy'])->name('dataprodi.destroy');

// routes untuk data dosen
Route::get('/datadosen', [App\http\Controllers\DataDosenController::class, 'index'])->name('datadosen.index');
Route::post('/datadosen/store', [App\http\Controllers\DataDosenController::class, 'store'])->name('dosen.store');
Route::get('/datadosen/create4', [App\http\Controllers\DataDosenController::class, 'create'])->name('datadosen.create');
Route::get('/datadosen/{id}', [App\http\Controllers\DataDosenController::class, 'show'])->name('datadosen.show');
Route::get('/datadosen/{id}/edit4', [App\http\Controllers\DataDosenController::class, 'edit'])->name('datadosen.edit');
Route::put('/datadosen/{id}', [App\http\Controllers\DataDosenController::class, 'update'])->name('datadosen.update');
Route::delete('/datadosen/{id}', [App\http\Controllers\DataDosenController::class, 'destroy'])->name('datadosen.destroy');

// routes untuk data mahasiswa
Route::get('/datamahasiswa', [App\http\Controllers\DataMahasiswaController::class, 'index'])->name('datamahasiswa.index');
Route::post('/datamahasiswa/store', [App\http\Controllers\DataMahasiswaController::class, 'store'])->name('mahasiswa.store');
Route::get('/datamahasiswa/create3', [App\http\Controllers\DataMahasiswaController::class, 'create'])->name('datamahasiswa.create');
Route::get('/datamahasiswa/{id}/edit', [App\http\Controllers\DataMahasiswaController::class, 'edit'])->name('datamahasiswa.edit');
Route::put('/datamahasiswa/{id}', [App\http\Controllers\DataMahasiswaController::class, 'update'])->name('datamahasiswa.update');
Route::delete('/datamahasiswa/{id}', [App\http\Controllers\DataMahasiswaController::class, 'destroy'])->name('datamahasiswa.destroy');


