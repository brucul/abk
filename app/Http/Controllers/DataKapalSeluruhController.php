<?php

namespace App\Http\Controllers;

use App\Models\berkas_dokumen;
use App\Models\biodata;
use App\Models\kapal;
use App\Models\pemberangkatan;
use App\Models\pengalaman_berlayar;
use App\Models\data_keluarga;
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


    public function index()
    {
        $title = "Data Seluruh Pendaftar";
        $sub_title = "List Data Seluruh Pendaftar";
        $peng = "Pengalaman";
        $nonpeng = "Non Pengalaman";
        $semua_data_pendaftar = biodata::where('status', '')->get();
        $id_pengalaman = pengalaman_berlayar::pluck('id_biodata');
        $pengalaman = biodata::whereIn('id', $id_pengalaman)->where('status', '')->get();
        $non = biodata::whereNotIn('id', $id_pengalaman)->where('status', '')->get();
        $praproses = biodata::where('status', 'praproses')->get();
        // $kapal = kapal::where('status', 'menyandar')->get();
        $kapal = kapal::all();
        $pemberangkatan = pemberangkatan::groupBy('id_kapal')->get();
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
        if ($request->kapal && $request->tanggal) {
            for ($i = 0; $i < sizeof($request->dipilih); $i++) {
                pemberangkatan::create([
                    'id_biodata' => $request->dipilih[$i],
                    'id_kapal' => $request->kapal,
                    'tanggal_pemberangkatan' => $request->tanggal,
                ]);
                biodata::where('id', $request->dipilih[$i])->update(['status' => 'berlayar']);
            }
            kapal::findOrFail($request->kapal)->update(['status' => 'berlayar']);
        } else {
            for ($i = 0; $i < sizeof($request->dipilih); $i++) {
                biodata::where('id', $request->dipilih[$i])->update(['status' => 'praproses']);
            }
        }


        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function printberangkat($id)
    {
        $pemberangkatan = pemberangkatan::findOrFail($id);
        $title = "PT. MAJU JAYA BERSAMA (MJB)";
        $namaper = "INTERNATIONAL RECRUITMEN MANNING AND SERVICE AGENCY";
        $alamatperu = "Jln Raya Karanganyar - Desa Karanganyar - Kedungbanteng - Tegal - Jawa Tengah";
        $telep = "Tel : +62283 6195 890, +62952 2502 6561 | Email : ptmjbtegal@gmail.com";
        $sub_title = "DATA SELURUH ABK BERLAYAR";
        $peng = "Pengalaman";
        $nonpeng = "Non Pengalaman";
        $nama_kapal = $pemberangkatan->kapal->nama_kapal;
        $jenis_kapal = $pemberangkatan->kapal->jenis;
        $bendera = $pemberangkatan->kapal->bendera;
        $tanggal_pemberangkatan = $pemberangkatan->tanggal_pemberangkatan;
        $id_penumpang = pemberangkatan::where('id_kapal', $pemberangkatan->id_kapal)
            ->where('tanggal_pemberangkatan', $pemberangkatan->tanggal_pemberangkatan)
            ->pluck('id_biodata');
        $bio = biodata::whereIn('id', $id_penumpang)->first();
        $penumpang = biodata::whereIn('id', $id_penumpang)->get();
        $kapal = kapal::whereIn('id', $id_penumpang)->get();
        return view('dataseluruh.print_berangkat', compact('id', 'telep', 'nonpeng', 'bio', 'penumpang', 'title', 'sub_title', 'peng', 'nama_kapal', 'jenis_kapal', 'bendera', 'kapal', 'tanggal_pemberangkatan', 'namaper', 'alamatperu'));
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


    public function downloadpdf($id)
    {
        // $biodata = biodata::all();
        $pemberangkatan = pemberangkatan::findOrFail($id);
        $title = "Data Pemberangkatan";
        $namaper = "PT MAJU JAYA KASIH";
        $alamatperu = "Jln. Mujaer Mundur No.6 - Kabupaten Tegal - Tegal Selatan - Kode POS : 52181";
        $telep = "Tel : +62283 6195 890, +62952 2502 6561 | Email : ptmjbtegal@gmail.com";
        $sub_title = "DATA SELURUH ABK BERLAYAR";
        $peng = "Pengalaman";
        $nonpeng = "Non Pengalaman";
        $nama_kapal = $pemberangkatan->kapal->nama_kapal;
        $jenis_kapal = $pemberangkatan->kapal->jenis;
        $bendera = $pemberangkatan->kapal->bendera;
        $tanggal_pemberangkatan = $pemberangkatan->tanggal_pemberangkatan;
        $id_penumpang = pemberangkatan::where('id_kapal', $pemberangkatan->id_kapal)
            ->where('tanggal_pemberangkatan', $pemberangkatan->tanggal_pemberangkatan)
            ->pluck('id_biodata');

        $penumpang = biodata::whereIn('id', $id_penumpang)->get();
        $bio = biodata::findOrFail($id);
        $pdf = PDF::loadview('dataseluruh.print_berangkat', compact('penumpang', 'bio', 'telep', 'title', 'sub_title', 'peng', 'nama_kapal', 'jenis_kapal', 'bendera', 'tanggal_pemberangkatan', 'namaper', 'alamatperu'));
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
        $tanggal_pemberangkatan = $pemberangkatan->tanggal_pemberangkatan;
        $id_penumpang = pemberangkatan::where('id_kapal', $pemberangkatan->id_kapal)
            ->where('tanggal_pemberangkatan', $pemberangkatan->tanggal_pemberangkatan)
            ->pluck('id_biodata');
        //
        $penumpang = biodata::whereIn('id', $id_penumpang)->get();
        return view('dataseluruh.list_penumpang', compact('id', 'penumpang', 'title', 'sub_title', 'peng', 'nama_kapal', 'jenis_kapal', 'bendera', 'tanggal_pemberangkatan'));
        // return $id_penumpang;



    }

    public function batal(Request $request)
    {
        if ($request->dipilih) {
            biodata::whereIn('id', $request->dipilih)->update(['status' => '']);
            $id = pemberangkatan::whereIn('id_biodata', $request->dipilih)->pluck('id');
            pemberangkatan::whereIn('id', $id)->delete();
            // for ($i=0; $i < sizeof($request->dipilih); $i++) { 
            //     biodata::where('id', $request->dipilih[$i])->update(['status' => 'berlayar']);
            // }
        }
        return redirect()->back();
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

        return view('dataseluruh.edit_pendaftaran', compact('title', 'sub_title', 'biodata', 'keluarga', 'pengalaman'));
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
        //
    }
}
