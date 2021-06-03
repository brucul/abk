<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\informasi;
use App\Models\penyakit;

class InformasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function informasi(Request $request, $id_biodata, $q2)
    {
        $informasi = [
            'id_biodata' => $id_biodata,
            'q1' => $request->q1,
            'q2' => $q2,
            'q3' => $request->q3,
            'q4' => $request->q4,
            'q5' => $request->q5,
            'q6' => $request->tgl.' - '.$request->posisi_sebelumnya,
            'q7' => $request->q7,
        ];
        return $informasi;
    }

    public function penyakit(Request $request, $id_quest)
    {
        $penyakit = [
            'id_quest' => $id_quest,
            'tahun' => $request->tahun,
            'jenis_penyakit' => $request->penyakit,
            'status_akhir' => $request->status_akhir,
            'keterangan' => $request->keterangan,
        ];
        return $penyakit;
    }

    public function tambah_penyakit(Request $request, $id_quest)
    {
        $penyakit = [
            'id_quest' => $id_quest,
            'tahun' => $request->add_tahun,
            'jenis_penyakit' => $request->add_penyakit,
            'status_akhir' => $request->add_status_akhir,
            'keterangan' => $request->add_keterangan,
        ];
        return $penyakit;
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
        //
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
        $informasi = informasi::findOrFail($id);
        $id_biodata = $informasi->id_biodata;
        $q2=$request->q2;
        if ($q2 == 'ya') {
            // $q2 = $request->bank.' ('.$request->rekening.')';
            $q2 = $request->bank;
        }
        $informasi->update($this->informasi($request, $id_biodata, $q2));

        $id_quest = $id;

        $data = $this->penyakit($request, $id_quest);
        $penyakit = penyakit::where('id_quest', $id)->count();
        if ($request->q1 == 'ya' && $penyakit >= 1) {
            for ($i=0; $i < count($request->id_penyakit); $i++) {
                $id_penyakit = $request->id_penyakit[$i];
                $penyakit = penyakit::findOrFail($id_penyakit);
                $penyakit->update([
                    'id_quest' => $id_quest,
                    'tahun' => $data['tahun'][$i],
                    'jenis_penyakit' => $data['jenis_penyakit'][$i],
                    'status_akhir' => $data['status_akhir'][$i],
                    'keterangan' => $data['keterangan'][$i],
                ]);
            }
        }
        
        $penyakit = $this->tambah_penyakit($request, $id_quest);
        if (!empty($penyakit['tahun'][0])) {
            for ($i=0; $i < count($request->add_tahun); $i++) {
                penyakit::create([
                    'id_quest' => $id_quest,
                    'tahun' => $penyakit['tahun'][$i],
                    'jenis_penyakit' => $penyakit['jenis_penyakit'][$i],
                    'status_akhir' => $penyakit['status_akhir'][$i],
                    'keterangan' => $penyakit['keterangan'][$i],
                ]);
            }
        }

        return redirect()->back()->with('success', 'Berhasil Menyimpan Data');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        penyakit::destroy($id);
        return response()->json([
            'success' => 'Berhasil Menghapus Data'
        ]);
    }
}
