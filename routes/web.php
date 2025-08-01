<?php

use App\Http\Controllers\SiswaContoller;
use App\Models\Siswa;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});



Route::get('/siswa',  [SiswaContoller::class, 'index'])->name('siswa.index');
Route::post('/siswa',  [SiswaContoller::class, 'store'])->name('siswa.store');

Route::get('/siswa/create', [SiswaContoller::class, 'create'])->name('siswa.create');

Route::get('/siswa/{siswa}', [SiswaContoller::class, 'show'])->name('siswa.show');
Route::delete('/siswa/{siswa}', [SiswaContoller::class, 'destroy'])->name('siswa.destroy');

