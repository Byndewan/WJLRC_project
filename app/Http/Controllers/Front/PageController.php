<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Konten;
use App\Models\Liputan;
use App\Models\Mading;
use App\Models\Resensi;
use Illuminate\Http\Request;
use App\Models\Organigram;
use App\Models\HomePageItem;

class PageController extends Controller
{
    public function index()
    {
        $data_page = HomePageItem::where('id','1')->first();
        return view('front.pengertian')->with('data_page',$data_page);
    }

    public function organigram()
    {
        $data_page = HomePageItem::where('id','1')->first();
        $data_organigram_pembina = Organigram::where('id','1')->first();
        $data_organigram_ketua = Organigram::where('id','2')->first();
        $data_organigram_WK1 = Organigram::where('id','3')->first();
        $data_organigram_WK2 = Organigram::where('id','4')->first();
        $data_organigram_B1 = Organigram::where('id','5')->first();
        $data_organigram_B2 = Organigram::where('id','6')->first();
        $data_organigram_S1 = Organigram::where('id','7')->first();
        $data_organigram_S2 = Organigram::where('id','8')->first();
        $data_organigram_AL1 = Organigram::where('id','9')->first();
        $data_organigram_AL2 = Organigram::where('id','10')->first();
        $data_organigram_KM1 = Organigram::where('id','11')->first();
        $data_organigram_KM2 = Organigram::where('id','12')->first();
        return view('front.organigram' , compact('data_organigram_pembina','data_organigram_ketua','data_organigram_WK1','data_organigram_WK2','data_organigram_B1','data_organigram_B2','data_organigram_S1','data_organigram_S2','data_organigram_AL1','data_organigram_AL2','data_organigram_KM1','data_organigram_KM2','data_page'));
    }

    public function divisi()
    {
        $data_page = HomePageItem::where('id','1')->first();
        return view('front.divisi')->with('data_page',$data_page);
    }

    public function program_online()
    {
        $data_page = HomePageItem::where('id','1')->first();
        $data_konten = Konten::orderBy('id','asc')->limit(4)->get();
        $data_resensi = Resensi::orderBy('id','asc')->limit(4)->get();
        $data_liputan = Liputan::orderBy('id','asc')->limit(4)->get();
        return view('front.program_online', compact('data_resensi','data_konten','data_liputan','data_page'));
    }

    public function program_offline()
    {
        $data_page = HomePageItem::where('id','1')->first();
        $data_mading = Mading::orderBy('id','asc')->limit(4)->get();
        return view('front.program_offline', compact('data_mading','data_page'));
    }

    //program online

    public function resensi()
    {
        $data_page = HomePageItem::where('id','1')->first();
        $data_resensi = Resensi::orderBy('created_at','desc')->get();
        return view('front.resensi', ['data_resensi' => $data_resensi])->with('data_page',$data_page);
    }

    public function search_resensi(Request $request){
        $data_page = HomePageItem::where('id','1')->first();

        if ($request->has('search')) {
            $data_resensi = Resensi::where('judul','LIKE','%'.$request->search.'%')->get();
        } else {
            $data_resensi = Resensi::all();
        }

        return view('front.resensi',['data_resensi' => $data_resensi])->with('data_page',$data_page);
    }

    public function detail_resensi($id)
    {
        $data_page = HomePageItem::where('id','1')->first();
        $resensi_data = Resensi::orderBy('id','asc')->get();
        $data_resensi = Resensi::where('id',$id)->first();
        return view('detail_halaman.detail_resensi', compact('data_resensi','resensi_data','data_page'));
    }

    public function konten()
    {
        $data_page = HomePageItem::where('id','1')->first();
        $data_konten = Konten::orderBy('id','asc')->get();
        return view('front.konten', ['data_konten' => $data_konten])->with('data_page',$data_page);
    }

    public function search_konten(Request $request){
        $data_page = HomePageItem::where('id','1')->first();
        
        if ($request->has('search')) {
            $data_konten = Konten::where('judul','LIKE','%'.$request->search.'%')->get();
        } else {
            $data_konten = Konten::all();
        }

        return view('front.konten',['data_konten' => $data_konten])->with('data_page',$data_page);
    }

    public function detail_konten($id)
    {
        $data_page = HomePageItem::where('id','1')->first();
        $konten_data = Konten::orderBy('id','asc')->get();
        $data_konten = Konten::where('id',$id)->first();
        return view('detail_halaman.detail_konten', compact('data_page','data_konten','konten_data'));
    }

    public function liputan()
    {
        $data_page = HomePageItem::where('id','1')->first();
        $data_liputan = Liputan::orderBy('id','asc')->get();
        return view('front.liputan', ['data_liputan' => $data_liputan])->with('data_page',$data_page);
    }

    public function search_liputan(Request $request){
        $data_page = HomePageItem::where('id','1')->first();

        if ($request->has('search')) {
            $data_liputan = Liputan::where('judul','LIKE','%'.$request->search.'%')->get();
        } else {
            $data_liputan = Liputan::all();
        }

        return view('front.liputan',['data_liputan' => $data_liputan])->with('data_page',$data_page);
    }

    public function detail_liputan($id)
    {
        $data_page = HomePageItem::where('id','1')->first();
        $liputan_data = Liputan::orderBy('id','asc')->get();
        $data_liputan = Liputan::where('id',$id)->first();
        return view('detail_halaman.detail_liputan', compact('data_liputan','liputan_data', 'data_page'));
    }

    public function mading()
    {
        $data_page = HomePageItem::where('id','1')->first();
        $data_mading = Mading::orderBy('id','asc')->get();
        return view('front.mading', ['data_mading' => $data_mading])->with('data_page',$data_page);
    }

    public function search_mading(Request $request){
        $data_page = HomePageItem::where('id','1')->first();

        if ($request->has('search')) {
            $data_mading = Mading::where('judul','LIKE','%'.$request->search.'%')->get();
        } else {
            $data_mading = Mading::all();
        }

        return view('front.mading',['data_mading' => $data_mading])->with('data_page',$data_page);
    }

    public function detail_mading($id)
    {
        $data_page = HomePageItem::where('id','1')->first();
        $mading_data = Mading::orderBy('id','asc')->get();
        $data_mading = Mading::where('id',$id)->first();
        return view('detail_halaman.detail_mading', compact('data_mading','mading_data','data_page'));
    }
}
