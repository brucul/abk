<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BiodataRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'posisi' => 'required',
            'nama_lengkap' => 'required',
            'nama_panggilan' => 'required',
            'jk' => 'required',
            'status_pernikahan' => 'required',
            'tanggal_lahir' => 'required',
            'kebangsaan' => 'required',
            'agama' => 'required',
            'ktp_sim' => 'required',
            'tinggi_badan' => 'required',
            'berat_badan' => 'required',
            'warna_mata' => 'required',
            'warna_rambut' => 'required',
            'bentuk_wajah' => 'required',
            'ciri_lain' => 'required',
            'alamat' => 'required',
            'nohp' => 'required',
            'telepon_darurat' => 'required',
            'saudara_kandung' => 'required',
            'email' => 'required',
            'tinggal_bersama' => 'required',
            'indo' => 'required',
            'inggris' => 'required',
            'spanyol' => 'required',
            'mandarin' => 'required',
            'hubungan' => 'required',
            //keluarga
            'nama_lengkap_saudara' => 'required',
            'usia' => 'required',
            'pendidikan' => 'required',
            'pekerjaan' => 'required',
            'no_hp' => 'required',
            'urutan_keluarga' => 'required',
            //informasi
            'q1' => 'required',
            'q3' => 'required',
            'q4' => 'required',
            'q5' => 'required',
            'q7' => 'required',
        ];
    }
}
