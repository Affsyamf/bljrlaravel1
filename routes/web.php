<?php

use App\Http\Controllers\SiswaContoller;
use App\Models\Siswa;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/afif/about', function () {
    $nama = 'afif syam ';
    $umur = 20;
     return view ('about', ['data' => $nama, 'umur' => 20]);
    // return view('about', compact('nama', 'umur'));
   //  return view('about') -> with ('nama', 'afif syam fauzi') -> with ('umur', 20);
})->name('about');

Route::get('/afif/contact', function () {
    return view ('contact.kontak');
})->name('contact');

Route::get('/siswa',  [SiswaContoller::class, 'index'])->name('siswa.index');

Route::get('/siswa/{id}', [SiswaContoller::class, 'show'])->name('siswa.show');
