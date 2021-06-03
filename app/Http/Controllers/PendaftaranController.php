<?php

namespace App\Http\Controllers;

use App\Helpers\ServicesHelpers;
use App\Models\berkas_dokumen;
use Illuminate\Http\Request;
use App\Models\penyakit;
use App\Models\informasi;
use App\Models\biodata;
use App\Models\data_keluarga;
use App\Models\pengalaman_berlayar;
use Illuminate\Routing\Route;
use Illuminate\Support\Facades\Storage;

class PendaftaranController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function biodata(Request $request, $status)
    {
        $biodata = [
            'nama_lengkap' => $request->nama_lengkap,
            'nama_panggilan' => $request->nama_panggilan,
            'jenis_kelamin' => $request->jk,
            'status_pernikahan' => $request->status_pernikahan,
            'tanggal_lahir' => $request->tanggal_lahir,
            'kebangsaan' => $request->kebangsaan,
            'agama' => $request->agama,
            'no_ktp' => $request->ktp_sim,
            'tinggi_badan' => $request->tinggi_badan,
            'berat_badan' => $request->berat_badan,
            'warna_mata' => $request->warna_mata,
            'warna_rambut' => $request->warna_rambut,
            'bentuk_wajah' => $request->bentuk_wajah,
            'ciri_lain' => $request->ciri_lain,
            'alamat' => $request->alamat,
            'no_hp' => $request->nohp,
            'telepon_darurat' => $request->telepon_darurat,
            'saudara_kandung' => $request->saudara_kandung,
            'email' => $request->email,
            'tinggal_bersama' => $request->tinggal_bersama,
            'status' => $status,
            'posisi' => $request->posisi,
            'indonesia' => $request->indo,
            'inggris' => $request->inggris,
            'spanyol' => $request->spanyol,
            'mandarin' => $request->mandarin,
        ];
        return $biodata;
    }
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
    public function dokumen(Request $request, $id_biodata, $ktp, $akte, $ijazah, $buku_nikah, $kartu_keluarga, $skck, $bst, $paspor, $buku_pelaut, $pas_foto_putih, $pas_foto_biru, $mcu)
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
            'exp_skck' => $request->sxp_skck,
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

    public function index()
    {
        $title = "Pendaftaran";
        $sub_title = "Pendaftaran Awak Kapal";

        return view('dataseluruh.form_pendaftaran', compact('title', 'sub_title'));
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
        $status = '';
        $biodata = biodata::create($this->biodata($request, $status));
        $id_biodata = $biodata->id;
        $kosongpdf = 'default.pdf';
        $kosongimg = 'default.jpg';
        // data_keluarga::create($this->data_keluarga($request, $id_biodata));
        $data = $this->data_keluarga($request, $id_biodata);
        for ($i=0; $i < count($request->hubungan); $i++) { 
            data_keluarga::create([
                'id_biodata' => $id_biodata,
                'hubungan' => $data['hubungan'][$i],
                'nama_lengkap' => $data['nama_lengkap'][$i],
                'usia' => $data['usia'][$i],
                'pendidikan' => $data['pendidikan'][$i],
                'pekerjaan' => $data['pekerjaan'][$i],
                'no_hp' => $data['no_hp'][$i],
                'urutan_keluarga' => $data['urutan_keluarga'][$i],
            ]);
        }

        $filePath = 'public/files/' . $biodata->id . '/dokumen/';
        if (!Storage::exists($filePath)) {
            Storage::makeDirectory($filePath, 0775, true, true);
        }

        //settingktp
        if ($request->file('ktp') == null) {
            $ktp = $kosongpdf;
        } else {
            $file = $request->file('ktp');
            $ktp = "ktp-" . $request->no_ktp . "-" . time() . "." . $file->extension();
            $file->storeAs($filePath, $ktp);
        }
        //settingakte
        if ($request->file('akte') == null) {
            $akte = $kosongpdf;
        } else {
            $file = $request->file('akte');
            $akte = "akte-" . $request->no_akte . "-" . time() . "." . $file->extension();
            $file->storeAs($filePath, $akte);
        }
        //settingijazah
        if ($request->file('ijazah') == null) {
            $ijazah = $kosongpdf;
        } else {
            $file = $request->file('ijazah');
            $ijazah = "ijazah-" . $request->no_ijasah . "-" . time() . "." . $file->extension();
            $file->storeAs($filePath, $ijazah);
        }
        //settingbuku_nikah
        if ($request->file('buku_nikah') == null) {
            $buku_nikah = $kosongpdf;
        } else {
            $file = $request->file('buku_nikah');
            $buku_nikah = "buku_nikah-" . $request->no_bnikah . "-" . time() . "." . $file->extension();
            $file->storeAs($filePath, $buku_nikah);
        }
        //settingkartu_keluarga
        if ($request->file('kartu_keluarga') == null) {
            $kartu_keluarga = $kosongpdf;
        } else {
            $file = $request->file('kartu_keluarga');
            $kartu_keluarga = "kartu_keluarga-" . $request->no_kk . "-" . time() . "." . $file->extension();
            $file->storeAs($filePath, $kartu_keluarga);
        }
        //settingskck
        if ($request->file('skck') == null) {
            $skck = $kosongpdf;
        } else {
            $file = $request->file('skck');
            $skck = "skck-" . $request->no_skck . "-" . time() . "." . $file->extension();
            $file->storeAs($filePath, $skck);
        }
        //settingbst
        if ($request->file('bst') == null) {
            $bst = $kosongpdf;
        } else {
            $file = $request->file('bst');
            $bst = "bst-" . $request->no_bst . "-" . time() . "." . $file->extension();
            $file->storeAs($filePath, $bst);
        }
        //settingpaspor
        if ($request->file('paspor') == null) {
            $paspor = $kosongpdf;
        } else {
            $file = $request->file('paspor');
            $paspor = "paspor-" . $request->no_paspor . "-" . time() . "." . $file->extension();
            $file->storeAs($filePath, $paspor);
        }
        //settingbuku_pelaut
        if ($request->file('buku_pelaut') == null) {
            $buku_pelaut = $kosongpdf;
        } else {
            $file = $request->file('buku_pelaut');
            $buku_pelaut = "buku_pelaut-" . $request->no_pelaut . "-" . time() . "." . $file->extension();
            $file->storeAs($filePath, $buku_pelaut);
        }
        //settingpas_foto_putih
        if ($request->file('pas_foto_putih') == null) {
            $pas_foto_putih = $kosongimg;
        } else {
            $file = $request->file('pas_foto_putih');
            $pas_foto_putih = "pas_foto_putih-" . time() . "." . $file->extension();
            $file->storeAs($filePath, $pas_foto_putih);
        }
        //settingmcu
        if ($request->file('pas_foto_biru') == null) {
            $pas_foto_biru = $kosongimg;
        } else {
            $file = $request->file('pas_foto_biru');
            $pas_foto_biru = "pas_foto_biru-" . time() . "." . $file->extension();
            $file->storeAs($filePath, $pas_foto_biru);
        }
        //settingmcu
        if ($request->file('mcu') == null) {
            $mcu = $kosongpdf;
        } else {
            $file = $request->file('mcu');
            $mcu = "mcu-" . $request->no_midikal . "-" . time() . "." . $file->extension();
            $file->storeAs($filePath, $mcu);
        }

        berkas_dokumen::create($this->dokumen($request, $id_biodata, $ktp, $akte, $ijazah, $buku_nikah, $kartu_keluarga, $skck, $bst, $paspor, $buku_pelaut, $pas_foto_putih, $pas_foto_biru, $mcu));

        
        // $field = 0;
        // foreach ($data as $key => $value) {
        //     $value = trim($value);
        //     if (!empty($value)) {
        //         $field += 1;
        //     }
        // }
        $data = $this->pengalaman_berlayar($request, $id_biodata);
        
        if (!empty($data['nama_perusahaan'][0])) {
            // pengalaman_berlayar::create($this->pengalaman_berlayar($request, $id_biodata));
            $data = $this->pengalaman_berlayar($request, $id_biodata);
            for ($i=0; $i < count($request->nama_perusahaan); $i++) { 
                pengalaman_berlayar::create([
                    'id_biodata' => $id_biodata,
                    'nama_perusahaan' => $data['nama_perusahaan'][$i],
                    'nama_kapal' => $data['nama_kapal'][$i],
                    'tipe_kapal' => $data['tipe_kapal'][$i],
                    'bendera' => $data['bendera'][$i],
                    'jabatan' => $data['jabatan'][$i],
                    'mulai' => $data['mulai'][$i],
                    'sampai' => $data['sampai'][$i],
                    'alasan_berhenti' => $data['alasan_berhenti'][$i],
                ]);
            }
        }

        $q2=$request->q2;
        if ($q2 == 'ya') {
            // $q2 = $request->bank.' ('.$request->rekening.')';
            $q2 = $request->bank;
        }
        $informasi = informasi::create($this->informasi($request, $id_biodata, $q2));
        $id_quest = $informasi->id;
        $penyakit = $this->penyakit($request, $id_quest);
        if ($request->q1 == 'ya') {
            for ($i=0; $i < count($request->tahun); $i++) {
                penyakit::create([
                    'id_quest' => $id_quest,
                    'tahun' => $penyakit['tahun'][$i],
                    'jenis_penyakit' => $penyakit['jenis_penyakit'][$i],
                    'status_akhir' => $penyakit['status_akhir'][$i],
                    'keterangan' => $penyakit['keterangan'][$i],
                ]);
            }
        }
        
        return redirect()->route('seluruhkapal.index')->with('success', 'Berhasil Menyimpan Data');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $title = "Data Dokumen";
        $sub_title = "List Data Dokumen";
        $no_id = biodata::findOrFail($id);
        $dokumen = berkas_dokumen::where('id_biodata', $no_id->id)->first();
        $biodatass = biodata::findOrFail($id);
        $keluarga = data_keluarga::findOrFail($id);
        $pengalaman = pengalaman_berlayar::where('id_biodata', $id)->get();
        $berkas = berkas_dokumen::where('id_biodata', $id)->get();

        // return dump(url('files' . '/' . $biodatass->nama_lengkap . '/uploads/ktp/' . $berkas[0]->ktp));
        return view('dataseluruh.datadokumen.main', compact('dokumen', 'biodatass', 'title', 'sub_title','keluarga','pengalaman','berkas'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
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
        $biodata = biodata::findOrFail($id);
        $status = $biodata->status;
        $biodata->update($this->biodata($request, $status));
        return redirect()->route('seluruhkapal.index')->with('success', 'Berhasil Menyimpan Data');
    }

    public function update_pengalaman(Request $request, $id)
    {
        $pengalaman = pengalaman_berlayar::findOrFail($id);
        $id_biodata = $pengalaman->id_biodata;
        $pengalaman->update($this->pengalaman_berlayar($request, $id_biodata));
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
        //
    }
    public function ShowById($id)
    {

    }
}
