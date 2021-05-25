<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\pengalaman_berlayar;
use App\Models\pemberangkatan;
use App\Models\informasi;

class biodata extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama_lengkap',
        'nama_panggilan',
        'jenis_kelamin',
        'tanggal_lahir',
        'status_pernikahan',
        'kebangsaan',
        'agama',
        'no_ktp',
        'tinggi_badan',
        'berat_badan',
        'warna_mata',
        'warna_rambut',
        'bentuk_wajah',
        'ciri_lain',
        'alamat',
        'no_hp',
        'telepon_darurat',
        'saudara_kandung',
        'email',
        'tinggal_bersama',
        'status',
        'posisi'

    ];

    public function pengalaman()
    {
        return $this->hasOne(pengalaman_berlayar::class);
    }
    public function pemberangkatan()
    {
        return $this->hasOne(pemberangkatan::class);
    }
    public function informasi()
    {
        return $this->hasOne(informasi::class, 'id_biodata');
    }
}
