<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EskulController;

// mengambil semua data & search
Route::get('/', [EskulController::class, 'index'])->name('home');
// halaman tambah data
Route::get('/add', [EskulController::class, 'create'])->name('add');
// tambah data
Route::post('/add/send', [EskulController::class, 'store'])->name('send');
// menampilkan halaman edit dan mengirim satu datanya
Route::get('/edit/{id}', [EskulController::class, 'edit'])->name('edit');
// mengubah data
Route::patch('/update/{id}', [EskulController::class, 'update'])->name('update');
// hapus data pake softdeletes
Route::delete('/delete/{id}', [EskulController::class, 'destroy'])->name('delete');
// ambil data sampah
Route::get('/trash', [EskulController::class, 'trash'])->name('trash');
// restore
Route::get('/trash/restore/{id}', [EskulController::class, 'restore'])->name('restore');
// hapus permanent
Route::get('/trash/delete/permanent/{id}', [EskulController::class, 'permanent'])->name('permanent');