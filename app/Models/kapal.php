<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\pemberangkatan;
use App\Models\history;

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
    public function history()
    {
        return $this->hasMany(history::class);
    }
}
