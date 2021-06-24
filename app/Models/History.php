<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\biodata;
use App\Models\kapal;

class History extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_biodata',
        'id_kapal',
        'keterangan',
        'tanggal',
    ];

    public function biodata(){
        return $this->belongsTo(biodata::class, 'id_biodata');
    }

    public function kapal(){
        return $this->belongsTo(kapal::class, 'id_kapal');
    }
}
