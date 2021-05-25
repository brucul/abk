<?php

namespace App\Http\Controllers;

use App\Models\biodata;
use App\Models\kapal;
use App\Models\pemberangkatan;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $title = "Dashboard";
        $sub_title = "";
        $datapen = biodata::count();
        $kapalada = kapal::count();
        $berang = pemberangkatan::count();
        return view('home.main', compact('title', 'sub_title', 'datapen', 'kapalada', 'berang'));
    }
}
