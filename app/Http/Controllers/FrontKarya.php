<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontKarya extends Controller
{
    public function index()
    {
        return view('front.detail_karya');
    }
}
