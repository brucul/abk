<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\biodata;
use App\Models\penyakit;

class informasi extends Model
{
    use HasFactory;
    protected $fillable=[
    	'id_biodata',
    	'q1',
    	'q2',
    	'q3',
    	'q4',
    	'q5',
    	'q6',
    	'q7',
    ];
    public function biodata(){
        return $this->belongsTo(biodata::class, 'id_biodata');
    }
    public function penyakit()
    {
        return $this->hasMany(penyakit::class, 'id_quest');
    }
}
