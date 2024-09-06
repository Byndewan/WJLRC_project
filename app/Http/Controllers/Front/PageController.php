<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Organigram;

class PageController extends Controller
{
    public function index()
    {
        return view('front.pengertian');
    }

    public function organigram()
    {
        $data_organigram = Organigram::orderBy('id','asc')->get();
        return view('front.organigram', compact('data_organigram'));
    }

    public function divisi()
    {
        return view('front.divisi');
    }

    public function program_online()
    {
        return view('front.program_online');
    }

    public function program_offline()
    {
        return view('front.program_offline');
    }

    //program online

    public function resensi()
    {
        return view('front.resensi');
    }

    public function konten()
    {
        return view('front.konten');
    }

    public function liputan()
    {
        return view('front.liputan');
    }

    public function mading()
    {
        return view('front.mading');
    }
}
