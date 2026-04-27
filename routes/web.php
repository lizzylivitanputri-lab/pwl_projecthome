<?php

use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\JurusanController;
use App\Http\Controllers\MataKuliahController;
use Illuminate\Support\Facades\Route;

Route::resource('mahasiswa', MahasiswaController::class);
Route::resource('dosen', DosenController::class);
Route::resource('jurusan', JurusanController::class);
Route::resource('mata_kuliah', MataKuliahController::class);

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/mahasiswa', [MahasiswaController::class, 'index']);
Route::get('/mahasiswa-create', [MahasiswaController::class, 'create'])->name('mahasiswa.add');
Route::post('/mahasiswa', [MahasiswaController::class, 'store'])->name('mahasiswa.save');
Route::get('/mahasiswa-edit/{id}', [MahasiswaController::class, 'edit'])->name('mahasiswa.update');;
Route::put('/mahasiswa/{id}', [MahasiswaController::class, 'update'])->name('mahasiswa.edit');
Route::delete('/mahasiswa/{id}', [MahasiswaController::class, 'destroy'])->name('mahasiswa.delete');

Route::get('/dosen', [DosenController::class, 'index']);
Route::get('/dosen-create', [DosenController::class, 'create'])->name('dosen.add');
Route::post('/dosen', [DosenController::class, 'store'])->name('dosen.save');
Route::get('/dosen-edit/{id}', [DosenController::class, 'edit'])->name('dosen.update');;
Route::put('/dosen/{id}', [DosenController::class, 'update'])->name('dosen.edit');
Route::delete('/dosen/{id}', [DosenController::class, 'destroy'])->name('dosen.delete');

Route::get('/jurusan', [JurusanController::class, 'index']);
Route::get('/jurusan-create', [JurusanController::class, 'create'])->name('dosen.add');
Route::post('/jurusan', [JurusanController::class, 'store'])->name('dosen.save');
Route::get('/jurusan-edit/{id}', [JurusanController::class, 'edit'])->name('dosen.update');;
Route::put('/jurusan/{id}', [JurusanController::class, 'update'])->name('dosen.edit');
Route::delete('/jurusan/{id}', [JurusanController::class, 'destroy'])->name('dosen.delete');

Route::get('/mata_kuliah', [MataKuliahController::class, 'index']);
Route::get('/mata_kuliah', [MataKuliahController::class, 'create'])->name('dosen.add');
Route::post('/mata_kuliah', [MataKuliahController::class, 'store'])->name('dosen.save');
Route::get('/mata_kuliah-edit/{id}', [MataKuliahController::class, 'edit'])->name('dosen.update');;
Route::put('/mata_kuliah/{id}', [MataKuliahController::class, 'update'])->name('dosen.edit');
Route::delete('/mata_kuliah/{id}', [MataKuliahController::class, 'destroy'])->name('dosen.delete');


// Route::get      => Get Data     => R => select
// SELECT ALL   /   SELECT SPESIFIK
// Route::post     => Save Data    => C => insert into  /   create
// Route::put      => Update Data  => U => update  /   alter
// Route::delete   => Delete Data  => D => delete  /   drop

// Create, Read, Update, Delete