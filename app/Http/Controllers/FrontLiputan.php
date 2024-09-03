<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontLiputan extends Controller
{
    public function index()
    {
        return view('front.detail_liputan');
    }
}
