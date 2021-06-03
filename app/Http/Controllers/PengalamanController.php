<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\biodata;
use App\Models\pengalaman_berlayar;

class PengalamanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function pengalaman_berlayar(Request $request, $id_biodata)
    {
        $pengalaman_berlayar = [
            'id_biodata' => $id_biodata,
            'nama_perusahaan' => $request->nama_perusahaan,
            'nama_kapal' => $request->nama_kapal,
            'tipe_kapal' => $request->tipe_kapal,
            'bendera' => $request->bendera,
            'jabatan' => $request->jabatan,
            'mulai' => $request->mulai,
            'sampai' => $request->sampai,
            'alasan_berhenti' => $request->alasan_berhenti
        ];
        return $pengalaman_berlayar;
    }

    public function index()
    {
        //
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
        pengalaman_berlayar::create($this->pengalaman_berlayar($request, $id_biodata));
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
        $title = "Data Pengalaman";
        $sub_title = "Data Pengalaman Berlayar";

        $id_biodata = $id;
        $pengalaman = pengalaman_berlayar::where('id_biodata', $id)->get();
        $biodata = biodata::where('id', $id)->first();
        $penyakit = $biodata->informasi->penyakit;
        $id_informasi = $biodata->informasi->id;
        return view('dataseluruh.edit-biodata.edit_pengalaman', compact('title', 'sub_title', 'pengalaman', 'id_biodata', 'biodata', 'penyakit', 'id_informasi'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $title = "Data pengalaman";
        $sub_title = "Data pengalaman";

        $pengalaman = pengalaman_berlayar::findOrFail($id);
        return view('dataseluruh.edit-biodata.form_edit_pengalaman', compact('title', 'sub_title', 'pengalaman'));
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
        $pengalaman = pengalaman_berlayar::findOrFail($id);
        $id_biodata = $pengalaman->id_biodata;
        $pengalaman->update($this->pengalaman_berlayar($request, $id_biodata));
        return redirect()->route('pengalaman.show', $id_biodata)->with('success', 'Berhasil Menyimpan Data');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        pengalaman_berlayar::destroy($id);
        return response()->json([
            'success' => 'Berhasil Menghapus Data'
        ]);
    }
}
