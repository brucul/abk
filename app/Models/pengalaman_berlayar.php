<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\biodata;

class pengalaman_berlayar extends Model
{
    use HasFactory;
    protected $table = "pengalaman_berlayars";
    protected $fillable = [
        'id_biodata',
            'nama_perusahaan',
            'nama_kapal',
            'tipe_kapal',
            'bendera' ,
            'jabatan' ,
            'mulai',
            'sampai',
            'alasan_berhenti'

    ];
    public function biodata(){
        return $this->belongsTo(biodata::class, 'id_biodata');
    }
}
