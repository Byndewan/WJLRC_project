<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontResensi extends Controller
{
    public function index()
    {
        return view('front.detail_resensi');
    }
}
