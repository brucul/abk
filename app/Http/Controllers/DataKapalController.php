<?php

namespace App\Http\Controllers;

use App\Models\biodata;
use App\Models\kapal;
use App\Models\pemberangkatan;
use App\Models\pengalaman_berlayar;
use Illuminate\Http\Request;

class DataKapalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function kapal(Request $request, $status)
    {
        $kapal= [
            'nama_kapal' => $request->nama_kapal,
            'jenis' => $request->jenis_kapal,
            'bendera' => $request->bendera,
            'status' =>$status
        ];
        return $kapal;
    }
    public function index()
    {
        $title = "Data Kapal";
        $sub_title = "List Data Kapal";
        $awak = "Data Awak Kapal";

        $kapal = kapal::all();
        return view('datakapal.main', compact('title', 'sub_title', 'kapal'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $title = " Tambah Data Kapal";
        $sub_title = "Tambah Data Kapal";
        $awak = "Data Kapal";
        return view('datakapal.form_tambah_kapal', compact('title','sub_title','awak'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $status = 'menyandar';
        kapal::create($this->kapal($request, $status));
        return redirect()->route('datakapal.index')->with('success', 'Berhasil Menyimpan Data');
    }

    public function pulang(Request $request)
    {
        if ($request->dipilih) {
            for ($i=0; $i < sizeof($request->dipilih); $i++) {
                $pemberangkatan = pemberangkatan::findOrFail($request->dipilih[$i]);
                kapal::where('id', $pemberangkatan->id_kapal)->update(['status' => 'menyandar']);
                biodata::where('id',$pemberangkatan->id_biodata)->update(['status' => '']);
            }
        }
        return back()->with('success', 'Berhasil Menyimpan Data');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $kapal = kapal::findOrFail($id);
        $title = " Edit Data Kapal";
        $sub_title = "Edit Data Kapal";
        $awak = "Data Kapal";
        return view('datakapal.edit', compact('title','sub_title','awak', 'kapal'));
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
        $status = kapal::where('id', $id)->pluck('status');
        kapal::findOrFail($id)->update($this->kapal($request, $status));
        return redirect()->route('datakapal.index')->with('success', 'Berhasil Menyimpan Data');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
