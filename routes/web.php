<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/about', function () {
    $nama = 'afif syam ';
    $umur = 20;
    // return view ('about', ['data' => $nama, 'umur' => 20]);
    return view('about', compact('nama', 'umur'));
});
Route::get('/siswa', function () {
    return view ('siswa.siswa');
});
Route::get('/contact', function () {
    return view ('contact.kontak');
});