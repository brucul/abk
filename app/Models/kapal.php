<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\pemberangkatan;

class kapal extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama_kapal',
            'jenis',
            'bendera',
            'status'

    ];

    public function pemberangkatan()
    {
        return $this->hasOne(pemberangkatan::class);
    }
}
