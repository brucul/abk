<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\biodata;
use App\Models\kapal;
use App\Models\pemberangkatan;
use App\Models\pengalaman_berlayar;

class AbkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = "Data ABK";
        $awak = "Data Awak Kapal";
        $sub_title = "List Data ABK";

        $abk_kapal = pemberangkatan::where('tanggal_pemberangkatan', '!=', null)->get();
        // $abk_kapal = biodata::whereIn('id', $id_abk_kapal)->get();
        $abk_pulang = biodata::where('status', 'pulang')->get();

        return view('abk-kapal.main', compact('awak','title', 'sub_title', 'abk_kapal', 'abk_pulang'));
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
