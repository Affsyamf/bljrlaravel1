<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class siswa extends Model
{
    //
    protected $table = 'siswa';
    protected $fillable = ['nama', 'nim', 'tanggal_lahir', 'jurusan'];
}
