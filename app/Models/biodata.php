<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\pengalaman_berlayar;
use App\Models\pemberangkatan;
use App\Models\informasi;
use App\Models\berkas_dokumen;
use App\Models\data_keluarga;

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
        'pulang',
        'posisi',
        'indonesia',
        'inggris',
        'spanyol',
        'mandarin',

    ];

    public function keluarga()
    {
        return $this->hasMany(data_keluarga::class, 'id_biodata');
    }
    public function pengalaman()
    {
        return $this->hasMany(pengalaman_berlayar::class, 'id_biodata');
    }
    public function pemberangkatan()
    {
        return $this->hasOne(pemberangkatan::class, 'id_biodata');
    }
    public function informasi()
    {
        return $this->hasOne(informasi::class, 'id_biodata');
    }
    public function dokumen()
    {
        return $this->hasOne(berkas_dokumen::class, 'id_biodata');
    }
}
