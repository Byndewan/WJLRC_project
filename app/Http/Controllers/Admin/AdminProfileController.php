<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Profile;
use App\Models\Admin;

class AdminProfileController extends Controller
{
    public function index()
    {
        $profile_data = Admin::orderBy('id','asc')->get();
        $all_data = Profile::orderBy('id','asc')->get();
        return view('admin.profile',compact('profile_data','all_data'));
    }
}
