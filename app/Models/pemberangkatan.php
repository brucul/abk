<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\biodata;
use App\Models\kapal;

class pemberangkatan extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_biodata',
        'id_kapal',
        'rencana_pemberangkatan',
        'tanggal_pemberangkatan',

    ];

    public function biodata(){
        return $this->belongsTo(biodata::class, 'id_biodata');
    }

    public function kapal(){
        return $this->belongsTo(kapal::class, 'id_kapal');
    }
}
