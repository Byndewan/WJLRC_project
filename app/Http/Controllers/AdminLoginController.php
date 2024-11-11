<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Hash;
use App\Models\Admin;

class AdminLoginController extends Controller
{
    public function index()
    {
        return view('admin.Login');
    }

    public function forgot_password()
    {
        return view('admin.forgot_password');
    }

    public function reset_password()
    {
        return view('admin.reset_password');
    }

    public function login_submit(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);


        $credential = [
            'email' => $request->email,
            'password' => $request->password
        ];

        if(Auth::guard('admin')->attempt($credential)){
            return redirect()->route('admin_home');
        } else {
            return redirect()->route('admin_login')->with('error', 'Information is not correct!');
        }
    }
}
