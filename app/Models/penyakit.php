<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\informasi;

class penyakit extends Model
{
    use HasFactory;
    protected $fillable=[
    	'id_quest',
    	'tahun',
    	'jenis_penyakit',
    	'status_akhir',
    	'keterangan',
    ];
    public function informasi(){
        return $this->belongsTo(informasi::class, 'id_quest');
    }
}
