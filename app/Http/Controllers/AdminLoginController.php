<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Hash;
use App\Mail\Websitemail;
use App\Models\Admin;

class AdminLoginController extends Controller
{
    public function index()
    {
        return view('admin.Login');
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

    public function logout()
    {
        Auth::guard('admin')->logout();
        return redirect()->route('admin_login');
    }

    public function forgot_password()
    {
        return view('admin.forgot_password');
    }

    public function forgot_password_submit(Request $request)
    {
        $request->validate([
            'email' => 'required|email'
        ]);

        $admin_data = Admin::where('email',$request->email)->first();
        if(!$admin_data){
            return redirect()->back()->with('error', 'Email address not found!');
        }

        $admin_data->update();

        $reset_link = url('admin/reset-password/'.$request->email);
        $subject = 'Reset Password';
        $message = 'Please click on the following link: <br>';
        $message .= '<a href="'.$reset_link.'">Click here</a>';

        \Mail::to($request->email)->send(new Websitemail($subject,$message));

        return redirect()->route('admin_login')->with('success', 'Please check your email and follow the steps there');
    }

    public function reset_password($email)
    {
        $admin_data = Admin::where('email', $email)->first();
        if(!$admin_data) {
            return redirect()->route('admin_login');
        }

        return view('admin.reset_password', compact('email'));
    }

    public function reset_password_submit(Request $Request)
    {
        $Request->validate([
            'password' => 'required',
            'retype_password' => 'required|same:password'
        ]);


        $admin_data = Admin::where('email',$Request->email)->first();

        $admin_data->password = Hash::make($Request->password);
        $admin_data->update();

        return redirect()->route('admin_login')->with('success', 'Password is reset successfully.');
    }
}
