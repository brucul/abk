<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class berkas_dokumen extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_biodata',
        'ktp',
        'akte',
        'ijazah',
        'buku_nikah',
        'kartu_keluarga',
        'skck',
        'bst',
        'paspor',
        'buku_pelaut',
        'pas_foto_putih',
        'pas_foto_biru',
        'mcu',
        'no_ktp',
        'exp_ktp',
        'no_akte',
        'exp_akte',
        'no_ijasah',
        'exp_ijasah',
        'no_bnikah',
        'exp_bnikah',
        'no_kk',
        'exp_kk',
        'no_skck',
        'sxp_skck',
        'no_bst',
        'exp_bst',
        'no_paspor',
        'exp_paspor',
        'no_pelaut',
        'exp_pelaut',
        'no_midikal',
        'exp_medikal'

    ];
}
