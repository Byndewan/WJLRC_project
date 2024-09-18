<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Karya;
use App\Models\Kontak;
use App\Models\Tim;
use Illuminate\Http\Request;
use App\Models\HomePageItem;

class HomeController extends Controller
{
    public function index()
    {
        $page_data = Tim::where( 'id','3')->first();
        $data_kontak = Kontak::where('id','1')->first();
        $tim_data = Tim::orderBy('id','asc')->get();
        $karya_data = Karya::orderBy('id','asc')->limit(6)->get();
        return view('front.home',compact('karya_data','page_data','tim_data'))->with('data_kontak', $data_kontak);
    }

    public function karya()
    {
        $data_karya = Karya::orderBy('id','asc')->get();
        return view('front.karya', compact('data_karya'));
    }

    public function detail_karya($id)
    {
        $data_karya = Karya::where('id',$id)->first();
        return view('detail_halaman.detail_karya')->with('data_karya', $data_karya);
    }

    public function contact()
    {
        $page_data = HomePageItem::where('id',1)->first();
        return view('front.home', compact('page_data'));
    }
}
