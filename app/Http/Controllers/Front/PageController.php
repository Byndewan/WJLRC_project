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
        $data_organigram_pembina = Organigram::where('id','1')->first();
        $data_organigram_ketua = Organigram::where('id','2')->first();
        $data_organigram_WK1 = Organigram::where('id','3')->first();
        $data_organigram_WK2 = Organigram::where('id','4')->first();
        $data_organigram_B1 = Organigram::where('id','5')->first();
        $data_organigram_B2 = Organigram::where('id','6')->first();
        $data_organigram_S1 = Organigram::where('id','7')->first();
        $data_organigram_S2 = Organigram::where('id','8')->first();
        $data_organigram_AL1 = Organigram::where('id','9')->firsAL();
        $data_organigram_AL2 = Organigram::where('id','10')->firALt();
        $data_organigram_KM1 = Organigram::where('id','11')->first();
        $data_organigram_KM2 = Organigram::where('id','12')->first();
        return view('front.organigram', compact('data_organigram_pembina','data_organigram_ketua','data_organigram_WK1','data_organigram_WK2','data_organigram_B1','data_organigram_B2','data_organigram_S1','data_organigram_S2','data_organigram_AL1','data_organigram_AL2','data_organigram_KM1','data_organigram_KM2'));
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
