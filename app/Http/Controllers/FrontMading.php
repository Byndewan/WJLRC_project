<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontMading extends Controller
{
    public function index()
    {
        return view('front.detail_mading');
    }
}
