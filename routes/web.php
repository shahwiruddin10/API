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


Route::get('/datafakultas', [DataFakultasController::class, 'index'])->name('datafakultas.index');
Route::post('/datafakultas', [DataFakultasController::class, 'store'])->name('fakultas.store');
Route::get('/datafakultas/create', [DataFakultasController::class, 'create'])->name('datafakultas.create');


Route::get('/dataprodi', [DataProdiController::class, 'index'])->name('dataprodi.index');
Route::post('/dataprodi', [DataProdiController::class, 'store'])->name('prodi.store');
Route::get('/dataprodi/create2', [DataProdiController::class, 'create'])->name('dataprodi.create');


Route::get('/datadosen', [App\http\Controllers\DataDosenController::class, 'index'])->name('datadosen.index');
Route::post('/datadosen', [App\http\Controllers\DataDosenController::class, 'store'])->name('dosen.store');
Route::get('/datadosen/create4', [App\http\Controllers\DataDosenController::class, 'create'])->name('datadosen.create');


Route::get('/datamahasiswa', [App\http\Controllers\DataMahasiswaController::class, 'index'])->name('datamahasiswa.index');
Route::post('/datamahasiswa', [App\http\Controllers\DataMahasiswaController::class, 'store'])->name('mahasiswa.store');
Route::get('/datamahasiswa/create3', [App\http\Controllers\DataMahasiswaController::class, 'create'])->name('datamahasiswa.create');    


