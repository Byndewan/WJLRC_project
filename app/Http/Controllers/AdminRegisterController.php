<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminRegisterController extends Controller
{
    public function index()
    {
        return view('admin.register');
    }
}
