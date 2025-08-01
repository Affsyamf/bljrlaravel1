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

Route::get('/siswa/{id}', [SiswaContoller::class, 'show'])->name('siswa.show');
