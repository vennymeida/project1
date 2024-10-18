<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pendidikan extends Model
{
    use HasFactory;
    protected $table = 'pendidikans';
    protected $fillable = [
        'tingkatan',
        'jurusan',
        'nama_institusi',
        'tahun_mulai',
        'tahun_selesai',
    ];
}
