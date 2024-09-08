<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        return view('front.pengertian');
    }

    public function organigram()
    {
        return view('front.organigram');
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

    public function detail_resensi()
    {
        return view('detail_halaman.detail_resensi');
    }

    public function konten()
    {
        return view('front.konten');
    }

    public function detail_konten()
    {
        return view('detail_halaman.detail_konten');
    }

    public function liputan()
    {
        return view('front.liputan');
    }

    public function detail_liputan()
    {
        return view('detail_halaman.detail_liputan');
    }

    public function mading()
    {
        return view('front.mading');
    }

    public function detail_mading()
    {
        return view('detail_halaman.detail_mading');
    }
}
