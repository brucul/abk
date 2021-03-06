<?php

namespace App\Http\Controllers;

use App\Models\berkas_dokumen;
use App\Models\biodata;
use App\Models\kapal;
use App\Models\pemberangkatan;
use App\Models\pengalaman_berlayar;
use App\Models\data_keluarga;
use App\Models\history;
use Illuminate\Http\Request;
use PDF;

class DataKapalSeluruhController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        ini_set('max_execution_time', 1000);
    }

    // public function history($id_biodata, $id_kapal, $ket)
    // {
    //     $history = [
    //         'id_biodata' => $id_biodata,
    //         'id_kapal' => $id_kapal,
    //         'keterangan' => $ket,
    //         'tanggal' => date('Y-m-d'),
    //     ]
    // }


    public function index()
    {
        $title = "Data Seluruh Pendaftar";
        $sub_title = "List Data Seluruh Pendaftar";
        $peng = "Pengalaman";
        $nonpeng = "Non Pengalaman";
        $semua_data_pendaftar = biodata::whereIn('status', ['', 'pulang', 'batal'])->get();
        $id_pengalaman = pengalaman_berlayar::groupBy('id_biodata')->pluck('id_biodata');
        $pengalaman = biodata::whereIn('id', $id_pengalaman)->whereIn('status', ['', 'pulang', 'batal'])->get();
        $non = biodata::whereNotIn('id', $id_pengalaman)->whereIn('status', ['', 'pulang', 'batal'])->get();
        $praproses = biodata::where('status', 'praproses')->get();
        // $kapal = kapal::where('status', 'menyandar')->get();
        $kapal = kapal::all();
        $pemberangkatan = pemberangkatan::where('tanggal_pemberangkatan', null)->groupBy('id_kapal', 'rencana_pemberangkatan')->get();
        return view('dataseluruh.main', compact('title', 'sub_title', 'peng', 'nonpeng', 'semua_data_pendaftar', 'pengalaman', 'non', 'praproses', 'kapal', 'pemberangkatan'));
    }

    public function proses(Request $request)
    {
        return "";
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
        if ($request->dipilih) {
            if ($request->kapal && $request->tanggal) {
                for ($i = 0; $i < sizeof($request->dipilih); $i++) {
                    pemberangkatan::create([
                        'id_biodata' => $request->dipilih[$i],
                        'id_kapal' => $request->kapal,
                        'rencana_pemberangkatan' => $request->tanggal,
                    ]);
                    biodata::where('id', $request->dipilih[$i])->update(['status' => 'proses']);
                }
                kapal::findOrFail($request->kapal)->update(['status' => 'berlayar']);
            } else {
                for ($i = 0; $i < sizeof($request->dipilih); $i++) {
                    biodata::where('id', $request->dipilih[$i])->update(['status' => 'praproses']);
                }
            }
            return back()->with('success', 'Berhasil Menyimpan Data');
        } else {
            return back()->with('error', 'Pilih Calon ABK');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function printberangkat($id)
    // {
    //     $pemberangkatan = pemberangkatan::findOrFail($id);
    //     $title = "PT. MAJU JAYA BERSAMA (MJB)";
    //     $namaper = "INTERNATIONAL RECRUITMEN MANNING AND SERVICE AGENCY";
    //     $alamatperu = "Jln Raya Karanganyar - Desa Karanganyar - Kedungbanteng - Tegal - Jawa Tengah";
    //     $telep = "Tel : +62283 6195 890, +62952 2502 6561 | Email : ptmjbtegal@gmail.com";
    //     $sub_title = "DATA SELURUH ABK BERLAYAR";
    //     $peng = "Pengalaman";
    //     $nonpeng = "Non Pengalaman";
    //     $nama_kapal = $pemberangkatan->kapal->nama_kapal;
    //     $jenis_kapal = $pemberangkatan->kapal->jenis;
    //     $bendera = $pemberangkatan->kapal->bendera;
    //     $tanggal_pemberangkatan = $pemberangkatan->tanggal_pemberangkatan;
    //     $id_penumpang = pemberangkatan::where('id_kapal', $pemberangkatan->id_kapal)
    //         ->where('tanggal_pemberangkatan', $pemberangkatan->tanggal_pemberangkatan)
    //         ->pluck('id_biodata');
    //     $bio = biodata::whereIn('id', $id_penumpang)->first();
    //     $penumpang = biodata::whereIn('id', $id_penumpang)->get();
    //     $kapal = kapal::whereIn('id', $id_penumpang)->get();
    //     return view('dataseluruh.datadokumen.crewlist', compact('id', 'telep', 'nonpeng', 'bio', 'penumpang', 'title', 'sub_title', 'peng', 'nama_kapal', 'jenis_kapal', 'bendera', 'kapal', 'tanggal_pemberangkatan', 'namaper', 'alamatperu'));
    //     return view('dataseluruh.print_berangkat', compact('id', 'telep', 'nonpeng', 'bio', 'penumpang', 'title', 'sub_title', 'peng', 'nama_kapal', 'jenis_kapal', 'bendera', 'kapal', 'tanggal_pemberangkatan', 'namaper', 'alamatperu'));
    // }

    public function printberangkat($id)
    {
        $pemberangkatan = pemberangkatan::findOrFail($id);
        $title = "Data Pemberangkatan";
        $sub_title = "List Data Seluruh ABK Berlayar";
        $peng = "Pengalaman";
        $nonpeng = "Non Pengalaman";
        $nama_kapal = $pemberangkatan->kapal->nama_kapal;
        $jenis_kapal = $pemberangkatan->kapal->jenis;
        $bendera = $pemberangkatan->kapal->bendera;
        $rencana_pemberangkatan = $pemberangkatan->rencana_pemberangkatan;
        $id_penumpang = pemberangkatan::where('id_kapal', $pemberangkatan->id_kapal)
            ->where('rencana_pemberangkatan', $pemberangkatan->rencana_pemberangkatan)
            ->pluck('id_biodata');
        
        $penumpang = biodata::whereIn('id', $id_penumpang)->get();
        return view('dataseluruh.datadokumen.crewlist', compact('id', 'penumpang', 'title', 'sub_title', 'peng', 'nama_kapal', 'jenis_kapal', 'bendera', 'rencana_pemberangkatan'));
    }

    //DOKUMENSSSTTT
    public function printberkasdokumen($id)
    {
        $title = "PT. MAJU JAYA BERSAMA (MJB)";
        $namaper = "INTERNATIONAL RECRUITMEN MANNING AND SERVICE AGENCY";
        $alamatperu = "Jln Raya Karanganyar - Desa Karanganyar - Kedungbanteng - Tegal - Jawa Tengah";
        $telep = "Tel : +62283 6195 890, +62952 2502 6561 | Email : ptmjbtegal@gmail.com";
        $sub_title = "DATA SELURUH ABK BERLAYAR";
        $peng = "Pengalaman";
        $nonpeng = "Non Pengalaman";
        $no_id = biodata::findOrFail($id);
        $dokumen = berkas_dokumen::where('id_biodata', $no_id->id)->first();
        return view('dataseluruh.datadokumen.print_dokumen', compact('title', 'dokumen', 'nonpeng', 'sub_title', 'telep', 'namaper', 'alamatperu', 'peng',));
    }

    //PRINTDATAPENGALAMAN
    public function printdatapengalaman($id)
    {
        $title = "PT. MAJU JAYA BERSAMA (MJB)";
        $namaper = "INTERNATIONAL RECRUITMEN MANNING AND SERVICE AGENCY";
        $alamatperu = "Jln Raya Karanganyar - Desa Karanganyar - Kedungbanteng - Tegal - Jawa Tengah";
        $telep = "Tel : +62283 6195 890, +62952 2502 6561 | Email : ptmjbtegal@gmail.com";
        $sub_title = "DATA SELURUH ABK BERLAYAR";
        $peng = "Pengalaman";
        $nonpeng = "Non Pengalaman";
        $no_id = biodata::findOrFail($id);
        $pengalaman = pengalaman_berlayar::orderBy('sampai', 'asc')->where('id_biodata', $no_id->id)->paginate(10);
        return view('dataseluruh.datapengalaman.printpengalaman', compact('title', 'pengalaman', 'nonpeng', 'sub_title', 'telep', 'namaper', 'alamatperu', 'peng',));
    }

    public function print_biodata($id)
    {
        $title = "PT. MAJU JAYA BERSAMA (MJB)";
        $namaper = "INTERNATIONAL RECRUITMEN MANNING AND SERVICE AGENCY";
        $alamatperu = "Jln Raya Karanganyar - Desa Karanganyar - Kedungbanteng - Tegal - Jawa Tengah";
        $telep = "Tel : +62283 6195 890, +62952 2502 6561 | Email : ptmjbtegal@gmail.com";
        $biodata = biodata::findOrFail($id);
        // $orangtua - data_keluarga::where(['hubungan', 'like', '%ibu%'])->get();

        return view('dataseluruh.print_biodata', compact('title', 'telep', 'namaper', 'alamatperu', 'biodata'));
    }

    public function downloadpdf($id)
    {
        $pemberangkatan = pemberangkatan::findOrFail($id);
        $title = "Data Pemberangkatan";
        $sub_title = "List Data Seluruh ABK Berlayar";
        $peng = "Pengalaman";
        $nonpeng = "Non Pengalaman";
        $nama_kapal = $pemberangkatan->kapal->nama_kapal;
        $jenis_kapal = $pemberangkatan->kapal->jenis;
        $bendera = $pemberangkatan->kapal->bendera;
        $rencana_pemberangkatan = $pemberangkatan->rencana_pemberangkatan;
        $id_penumpang = pemberangkatan::where('id_kapal', $pemberangkatan->id_kapal)
            ->where('rencana_pemberangkatan', $pemberangkatan->rencana_pemberangkatan)
            ->pluck('id_biodata');
        
        $penumpang = biodata::whereIn('id', $id_penumpang)->get();
        $pdf = PDF::loadview('dataseluruh.datadokumen.crewlist', compact('id', 'penumpang', 'title', 'sub_title', 'peng', 'nama_kapal', 'jenis_kapal', 'bendera', 'rencana_pemberangkatan'))->setPaper('a4', 'landscape');
        return $pdf->download('laporan-berangkat.pdf');
    }
    public function show($id)
    {
        //
        $pemberangkatan = pemberangkatan::findOrFail($id);
        $title = "Data Pemberangkatan";
        $sub_title = "List Data Seluruh ABK Berlayar";
        $peng = "Pengalaman";
        $nonpeng = "Non Pengalaman";
        $nama_kapal = $pemberangkatan->kapal->nama_kapal;
        $jenis_kapal = $pemberangkatan->kapal->jenis;
        $bendera = $pemberangkatan->kapal->bendera;
        $rencana_pemberangkatan = $pemberangkatan->rencana_pemberangkatan;
        $id_penumpang = pemberangkatan::where('id_kapal', $pemberangkatan->id_kapal)
            ->where('rencana_pemberangkatan', $pemberangkatan->rencana_pemberangkatan)
            ->pluck('id_biodata');
        
        $penumpang = biodata::whereIn('id', $id_penumpang)->get();
        return view('dataseluruh.list_penumpang', compact('id', 'penumpang', 'title', 'sub_title', 'peng', 'nama_kapal', 'jenis_kapal', 'bendera', 'rencana_pemberangkatan'));
    }

    public function show_abk_diatas_kapal($id)
    {
        //
        $pemberangkatan = pemberangkatan::findOrFail($id);
        $title = "Data Pemberangkatan";
        $sub_title = "List Data Seluruh ABK Berlayar";
        $peng = "Pengalaman";
        $nonpeng = "Non Pengalaman";
        $nama_kapal = $pemberangkatan->kapal->nama_kapal;
        $jenis_kapal = $pemberangkatan->kapal->jenis;
        $bendera = $pemberangkatan->kapal->bendera;
        $rencana_pemberangkatan = $pemberangkatan->rencana_pemberangkatan;
        $id_penumpang = pemberangkatan::where('id_kapal', $pemberangkatan->id_kapal)
            ->where('rencana_pemberangkatan', $pemberangkatan->rencana_pemberangkatan)
            ->pluck('id_biodata');
        
        $penumpang = biodata::whereIn('id', $id_penumpang)->get();
        return view('abk-kapal.list_penumpang', compact('id', 'penumpang', 'title', 'sub_title', 'peng', 'nama_kapal', 'jenis_kapal', 'bendera', 'rencana_pemberangkatan'));
    }

    public function batal(Request $request)
    {
        $biodata = biodata::whereIn('id', $request->dipilih)->first();
        $id_kapal = $biodata->pemberangkatan->id_kapal;
        $rencana_pemberangkatan = $biodata->pemberangkatan->rencana_pemberangkatan;
        if ($request->dipilih) {
            biodata::whereIn('id', $request->dipilih)->update(['status' => 'batal']);
            $id = pemberangkatan::whereIn('id_biodata', $request->dipilih)->pluck('id');
            pemberangkatan::whereIn('id', $id)->delete();
            // for ($i=0; $i < sizeof($request->dipilih); $i++) { 
            //     biodata::where('id', $request->dipilih[$i])->update(['status' => 'berlayar']);
            // }
        }

        $count = pemberangkatan::where([
                            ['id_kapal', $id_kapal], 
                            ['rencana_pemberangkatan', $rencana_pemberangkatan]
                        ])->count();

        $pemberangkatan = pemberangkatan::where([
                            ['id_kapal', $id_kapal], 
                            ['rencana_pemberangkatan', $rencana_pemberangkatan]
                        ])->first();
        
        if ($count >= 1) {
            return redirect()->route('seluruhkapal.show', $pemberangkatan->id)->with('success', 'Berhasil Menyimpan Data');
        }else{
            return redirect()->route('seluruhkapal.index')->with('success', 'Berhasil Menyimpan Data');
        }
        
    }

    public function pulang(Request $request)
    {
        $biodata = biodata::whereIn('id', $request->dipilih)->first();
        $id_kapal = $biodata->pemberangkatan->id_kapal;
        $rencana_pemberangkatan = $biodata->pemberangkatan->rencana_pemberangkatan;
        if ($request->dipilih) {
            biodata::whereIn('id', $request->dipilih)->update(['status' => 'pulang', 'pulang' => date('Y-m-d')]);
            $id = pemberangkatan::whereIn('id_biodata', $request->dipilih)->pluck('id');
            pemberangkatan::whereIn('id', $id)->delete();
            // for ($i=0; $i < sizeof($request->dipilih); $i++) { 
            //     biodata::where('id', $request->dipilih[$i])->update(['status' => 'berlayar']);
            // }
        }

        $keterangan = 'Pulang';
        for ($i=0; $i < sizeof($request->dipilih); $i++) { 
            history::create([
                'id_biodata' => $request->dipilih[$i],
                'id_kapal' => $id_kapal,
                'keterangan' => $keterangan,
                'tanggal' => date('Y-m-d'),
            ]);
        }
        
        $count = pemberangkatan::where([
                            ['id_kapal', $id_kapal], 
                            ['rencana_pemberangkatan', $rencana_pemberangkatan]
                        ])->count();

        $pemberangkatan = pemberangkatan::where([
                            ['id_kapal', $id_kapal], 
                            ['rencana_pemberangkatan', $rencana_pemberangkatan]
                        ])->first();
        
        if ($count >= 1) {
            return redirect()->route('seluruhkapal.show_abk', $pemberangkatan->id)->with('success', 'Berhasil Menyimpan Data');
        }else{
            return redirect()->route('abk-kapal.index')->with('success', 'Berhasil Menyimpan Data');
        }
    }

    public function berangkatkan($id)
    {
        $pemberangkatan = pemberangkatan::findOrFail($id);
        $id_penumpang = pemberangkatan::where('id_kapal', $pemberangkatan->id_kapal)
            ->where('rencana_pemberangkatan', $pemberangkatan->rencana_pemberangkatan)
            ->pluck('id_biodata');
        biodata::whereIn('id', $id_penumpang)->update(['status' => 'berlayar']);
        pemberangkatan::whereIn('id_biodata', $id_penumpang)->update(['tanggal_pemberangkatan' => date('Y-m-d')]);
        $data = pemberangkatan::whereIn('id_biodata', $id_penumpang)->get();
        $keterangan = 'Berangkat';
        for ($i=0; $i < sizeof($data); $i++) { 
            history::create([
                'id_biodata' => $data[$i]['id_biodata'],
                'id_kapal' => $data[$i]['id_kapal'],
                'keterangan' => $keterangan,
                'tanggal' => date('Y-m-d'),
            ]);
        }

        return redirect()->back()->with('success', 'Berhasil Menyimpan Data');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $title = "Biodata";
        $sub_title = "Edit Data Awak Kapal";
        $biodata = biodata::findOrFail($id);
        $keluarga = data_keluarga::where('id_biodata', $id)->get();
        $pengalaman = pengalaman_berlayar::where('id_biodata', $id)->get();

        return view('dataseluruh.edit-biodata.edit_biodata', compact('title', 'sub_title', 'biodata', 'keluarga', 'pengalaman'));
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
        //
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        biodata::destroy($id);
        return response()->json([
            'success' => 'Berhasil Menghapus Data'
        ]);
    }
}
