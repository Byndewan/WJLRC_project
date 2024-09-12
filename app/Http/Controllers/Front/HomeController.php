<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Karya;
use App\Models\Tim;
use Illuminate\Http\Request;
use App\Models\HomePageItem;

class HomeController extends Controller
{
    public function index()
    {
        $tim_show = Tim::where('id','1')->first();
        $tim_data = Tim::orderBy('id','asc')->get();
        $karya_data = Karya::orderBy('id','asc')->get();
        return view('front.home',compact('karya_data','tim_show','tim_data'));
    }

    public function karya()
    {
        return view('front.karya');
    }

    public function detail_karya()
    {
        return view('detail_halaman.detail_karya');
    }

    public function contact()
    {
        $page_data = HomePageItem::where('id',1)->first();
        return view('front.home', compact('page_data'));
    }
}
