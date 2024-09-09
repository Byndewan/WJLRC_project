<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Karya;
use Illuminate\Http\Request;
use App\Models\HomePageItem;

class HomeController extends Controller
{
    public function index()
    {
        return view('front.home');
    }

    public function karya()
    {
        $data_karya = Karya::orderBy('id','asc')->get();
        return view('front.karya',compact('data_karya'));
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
