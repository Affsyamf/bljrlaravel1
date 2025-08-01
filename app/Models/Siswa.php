<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    use HasFactory;
    //
    protected $table = 'siswa';
    protected $fillable = ['nama', 'nim', 'tanggal_lahir', 'jurusan', 'mentor_id'];

    public function mentor() {
        return $this->belongsTo(mentor::class);
    }

}
