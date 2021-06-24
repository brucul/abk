<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class KeluargaRequest extends FormRequest
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
            'nama_lengkap_saudara' => 'required',
            'usia' => 'required',
            'pendidikan' => 'required',
            'pekerjaan' => 'required',
            'no_hp' => 'required',
            'urutan_keluarga' => 'required',
        ];
    }
}
