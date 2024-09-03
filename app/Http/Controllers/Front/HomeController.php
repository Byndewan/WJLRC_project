<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
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
        return view('front.karya');
    }

    public function contact() 
    {
        $page_data = HomePageItem::where('id',1)->first();
        return view('front.home', compact('page_data'));
    }
}
