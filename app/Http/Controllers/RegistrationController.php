<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Mail\RegistrationMail;
use Hash;
use Auth;

class RegistrationController extends Controller
{
    public function registration() 
    {
        return view('registration');
    }

    public function registration_success() 
    {
        return view('login_button');
    }

    public function registration_submit(Request $request)
    {
        $token = hash('sha256',time());

        $request->validate([
            'name' => 'required|unique:users',
            'phone_number' => 'required|unique:users',
            'email' => 'required|unique:users',
            'password' => 'required',
            'retype_password' => 'required|same:password'
        ]);

        $user = new User();
        $user->name = $request->name;
        $user->phone_number = $request->phone_number;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->token = $token;
        $user->save();

        $verification_link = url('registration/verify/'.$token.'/'.$request->email);
        $subject = 'Registration Confirmation';
        $message = 'Registration is success';

        \Mail::to($request->email)->send(new RegistrationMail($subject,$message));

        // echo 'Email is sent';

        return redirect()->route('user_login')->with('success', 'Registration successful! You can now log in to your account.');
    }

    public function registration_verify($token,$email)
    {
        $user = User::where('token',$token)->where('email',$email)->first();
        if(!$user)
        {
            return redirect()->route('user_login');
        }

        $user->token = '';
        $user->update();
        
        echo 'Registration verification is successful';
    } 
}
