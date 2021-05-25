<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class data_keluarga extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_biodata',
            'hubungan',
            'nama_lengkap',
            'usia',
            'pendidikan' ,
            'pekerjaan' ,
            'no_hp',
            'urutan_keluarga'

    ];
}
