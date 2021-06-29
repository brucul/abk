<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\berkas_dokumen;
use App\Models\biodata;
use Illuminate\Support\Facades\Storage;

class DokumenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function dokumen(Request $request, $id_biodata, $ktp, $akte, $ijazah, $buku_nikah, $kartu_keluarga, $skck, $bst, $paspor, $buku_pelaut, $pas_foto_putih, $pas_foto_biru, $mcu, $all_doc)
    {
        $dokumen = [
            'id_biodata' => $id_biodata,
            'ktp' => $ktp,
            'akte' => $akte,
            'ijazah' => $ijazah,
            'buku_nikah' => $buku_nikah,
            'kartu_keluarga' => $kartu_keluarga,
            'skck' => $skck,
            'bst' => $bst,
            'paspor' => $paspor,
            'buku_pelaut' => $buku_pelaut,
            'pas_foto_putih' => $pas_foto_putih,
            'pas_foto_biru' => $pas_foto_biru,
            'mcu' => $mcu,
            'all_doc' => $all_doc,
            'no_ktp' => $request->no_ktp,
            'exp_ktp' => $request->exp_ktp,
            'no_akte' => $request->no_akte,
            'exp_akte' => $request->exp_akte,
            'no_ijasah' => $request->no_ijasah,
            'exp_ijasah' => $request->exp_ijasah,
            'no_bnikah' => $request->no_bnikah,
            'exp_bnikah' => $request->exp_bnikah,
            'no_kk' => $request->no_kk,
            'exp_kk' => $request->exp_kk,
            'no_skck' => $request->no_skck,
            'exp_skck' => $request->exp_skck,
            'no_bst' => $request->no_bst,
            'exp_bst' => $request->exp_bst,
            'no_paspor' => $request->no_paspor,
            'exp_paspor' => $request->exp_paspor,
            'no_pelaut' => $request->no_pelaut,
            'exp_pelaut' => $request->exp_pelaut,
            'no_midikal' => $request->no_midikal,
            'exp_medikal' => $request->exp_medikal
        ];
        return $dokumen;
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
        //
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
        $title = "Data Dokumen";
        $sub_title = "Data Dokumen";

        $id_biodata = $id;
        $dokumen = berkas_dokumen::where('id_biodata', $id)->first();
        return view('dataseluruh.edit-biodata.edit_dokumen', compact('title', 'sub_title', 'dokumen', 'id_biodata'));
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
        $berkas_dokumen = berkas_dokumen::findOrFail($id);
        $id_biodata = $berkas_dokumen->biodata->id;
        $biodata = biodata::findOrFail($id_biodata);

        $filePath = 'public/files/' . $biodata->id . '/dokumen/';
        if (!Storage::exists($filePath)) {
            Storage::makeDirectory($filePath, 0775, true, true);
        }

        if ($request->file('ktp') == null) {
            $ktp = $berkas_dokumen->ktp;
        } else {
            $file = $request->file('ktp');
            $ktp = "ktp-" . $request->no_ktp . "-" . time() . "." . $file->extension();
            $file->storeAs($filePath, $ktp);
            Storage::delete($filePath.$berkas_dokumen->ktp);
        }
        //settingakte
        if ($request->file('akte') == null) {
            $akte = $berkas_dokumen->akte;
        } else {
            $file = $request->file('akte');
            $akte = "akte-" . $request->no_akte . "-" . time() . "." . $file->extension();
            $file->storeAs($filePath, $akte);
            Storage::delete($filePath.$berkas_dokumen->ktp);
        }
        //settingijazah
        if ($request->file('ijazah') == null) {
            $ijazah = $berkas_dokumen->ijazah;
        } else {
            $file = $request->file('ijazah');
            $ijazah = "ijazah-" . $request->no_ijasah . "-" . time() . "." . $file->extension();
            $file->storeAs($filePath, $ijazah);
            Storage::delete($filePath.$berkas_dokumen->ktp);
        }
        //settingbuku_nikah
        if ($request->file('buku_nikah') == null) {
            $buku_nikah = $berkas_dokumen->buku_nikah;
        } else {
            $file = $request->file('buku_nikah');
            $buku_nikah = "buku_nikah-" . $request->no_bnikah . "-" . time() . "." . $file->extension();
            $file->storeAs($filePath, $buku_nikah);
            Storage::delete($filePath.$berkas_dokumen->ktp);
        }
        //settingkartu_keluarga
        if ($request->file('kartu_keluarga') == null) {
            $kartu_keluarga = $berkas_dokumen->kartu_keluarga;
        } else {
            $file = $request->file('kartu_keluarga');
            $kartu_keluarga = "kartu_keluarga-" . $request->no_kk . "-" . time() . "." . $file->extension();
            $file->storeAs($filePath, $kartu_keluarga);
            Storage::delete($filePath.$berkas_dokumen->ktp);
        }
        //settingskck
        if ($request->file('skck') == null) {
            $skck = $berkas_dokumen->skck;
        } else {
            $file = $request->file('skck');
            $skck = "skck-" . $request->no_skck . "-" . time() . "." . $file->extension();
            $file->storeAs($filePath, $skck);
            Storage::delete($filePath.$berkas_dokumen->ktp);
        }
        //settingbst
        if ($request->file('bst') == null) {
            $bst = $berkas_dokumen->bst;
        } else {
            $file = $request->file('bst');
            $bst = "bst-" . $request->no_bst . "-" . time() . "." . $file->extension();
            $file->storeAs($filePath, $bst);
            Storage::delete($filePath.$berkas_dokumen->ktp);
        }
        //settingpaspor
        if ($request->file('paspor') == null) {
            $paspor = $berkas_dokumen->paspor;
        } else {
            $file = $request->file('paspor');
            $paspor = "paspor-" . $request->no_paspor . "-" . time() . "." . $file->extension();
            $file->storeAs($filePath, $paspor);
            Storage::delete($filePath.$berkas_dokumen->ktp);
        }
        //settingbuku_pelaut
        if ($request->file('buku_pelaut') == null) {
            $buku_pelaut = $berkas_dokumen->buku_pelaut;
        } else {
            $file = $request->file('buku_pelaut');
            $buku_pelaut = "buku_pelaut-" . $request->no_pelaut . "-" . time() . "." . $file->extension();
            $file->storeAs($filePath, $buku_pelaut);
            Storage::delete($filePath.$berkas_dokumen->ktp);
        }
        //settingpas_foto_putih
        if ($request->file('pas_foto_putih') == null) {
            $pas_foto_putih = $berkas_dokumen->pas_foto_putih;
        } else {
            $file = $request->file('pas_foto_putih');
            $pas_foto_putih = "pas_foto_putih-" . time() . "." . $file->extension();
            $file->storeAs($filePath, $pas_foto_putih);
            Storage::delete($filePath.$berkas_dokumen->ktp);
        }
        //settingmcu
        if ($request->file('pas_foto_biru') == null) {
            $pas_foto_biru = $berkas_dokumen->pas_foto_biru;
        } else {
            $file = $request->file('pas_foto_biru');
            $pas_foto_biru = "pas_foto_biru-" . time() . "." . $file->extension();
            $file->storeAs($filePath, $pas_foto_biru);
            Storage::delete($filePath.$berkas_dokumen->ktp);
        }
        //settingmcu
        if ($request->file('mcu') == null) {
            $mcu = $berkas_dokumen->mcu;
        } else {
            $file = $request->file('mcu');
            $mcu = "mcu-" . $request->no_midikal . "-" . time() . "." . $file->extension();
            $file->storeAs($filePath, $mcu);
            Storage::delete($filePath.$berkas_dokumen->mcu);
        }
        //all_doc
        if ($request->file('all_doc') == null) {
            $all_doc = $berkas_dokumen->all_doc;
        } else {
            $file = $request->file('all_doc');
            $all_doc = "all_doc-" . time() . "." . $file->extension();
            $file->storeAs($filePath, $all_doc);
            Storage::delete($filePath.$berkas_dokumen->all_doc);
        }

        $berkas_dokumen->update($this->dokumen($request, $id_biodata, $ktp, $akte, $ijazah, $buku_nikah, $kartu_keluarga, $skck, $bst, $paspor, $buku_pelaut, $pas_foto_putih, $pas_foto_biru, $mcu, $all_doc));

        return redirect()->route('seluruhkapal.index')->with('success', 'Berhasil Menyimpan Data');
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
