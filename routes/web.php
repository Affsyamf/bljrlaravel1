<?php

use App\Models\Siswa;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/about', function () {
    $nama = 'afif syam ';
    $umur = 20;
     return view ('about', ['data' => $nama, 'umur' => 20]);
    // return view('about', compact('nama', 'umur'));
   //  return view('about') -> with ('nama', 'afif syam fauzi') -> with ('umur', 20);
});
Route::get('/contact', function () {
    return view ('contact.kontak');
});
Route::get('/siswa', function () {
    $data = Siswa::orderBy('nim', 'asc')->get();
    return view ('siswa.siswa', ['data' => $data]);
});
Route::get('/siswa/{id}', function ($id) {
    // dd($id);
    $siswa = Siswa::find($id); 
    return view ('siswa.show', ['siswa' => $siswa ]);
});
