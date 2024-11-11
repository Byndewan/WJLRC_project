<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin;

class AdminHomeController extends Controller
{
    public function index()
    {
        return view('admin.home');
    }
}
