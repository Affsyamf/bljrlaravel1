<?php

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
Route::get('/siswa', function () {
    $data = [
        ['id' => 1, 'nama' => 'afif', 'nim' => '6702223011'],
        ['id' => 2, 'nama' => 'misel', 'nim' => '6702223012'],
        ['id' => 3, 'nama' => 'gerald', 'nim' => '6702223013'],
        ['id' => 4, 'nama' => 'hazel', 'nim' => '6702223014'],
    ];
    return view ('siswa.siswa', ['data' => $data]);
});
Route::get('/contact', function () {
    return view ('contact.kontak');
});
Route::get('/siswa/{id}', function ($id) {
    // dd($id);
    return view ('siswa.show', ['id' => $id ]);
});
