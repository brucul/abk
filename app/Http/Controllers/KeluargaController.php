<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\data_keluarga;

class KeluargaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function data_keluarga(Request $request, $id_biodata)
    {
        $data_keluarga = [
            'id_biodata' => $id_biodata,
            'hubungan' => $request->hubungan,
            'nama_lengkap' => $request->nama_lengkap_saudara,
            'usia' => $request->usia,
            'pendidikan' => $request->pendidikan,
            'pekerjaan' => $request->pekerjaan,
            'no_hp' => $request->no_hp,
            'urutan_keluarga' => $request->urutan_keluarga
        ];
        return $data_keluarga;
    }

    public function index()
    {
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $id_biodata = $request->id_biodata;
        data_keluarga::create($this->data_keluarga($request, $id_biodata));
        return redirect()->back()->with('success', 'Berhasil Menyimpan Data');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $title = "Data Keluarga";
        $sub_title = "Data Keluarga";

        $id_biodata = $id;
        $keluarga = data_keluarga::where('id_biodata', $id)->get();
        return view('dataseluruh.edit-biodata.edit_keluarga', compact('title', 'sub_title', 'keluarga', 'id_biodata'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $title = "Data Keluarga";
        $sub_title = "Data Keluarga";

        $keluarga = data_keluarga::findOrFail($id);
        return view('dataseluruh.edit-biodata.form_edit_keluarga', compact('title', 'sub_title', 'keluarga'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $keluarga = data_keluarga::findOrFail($id);
        $id_biodata = $keluarga->id_biodata;
        $keluarga->update($this->data_keluarga($request, $id_biodata));
        return redirect()->route('keluarga.show', $id_biodata)->with('success', 'Berhasil Menyimpan Data');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        data_keluarga::destroy($id);
        return response()->json([
            'success' => 'Berhasil Menghapus Data'
        ]);
    }
}
