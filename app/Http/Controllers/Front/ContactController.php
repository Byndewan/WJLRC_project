<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
// use App\Models\HomePageItem;
use App\Models\User;
use App\Mail\Websitemail;

class ContactController extends Controller
{
    public function index() 
    {
        $page_data = User::where('id',1)->first();
        return view('front.home', compact('page_data'));
    }

    public function send_email(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'comment' => 'required'
        ]);

        $user_data = User::where('id',1)->first();
        $user_email =  $user_data->email;

        $subject = 'Contact Form Message';
        $message = 'Visitor Information<br><br>';
        $message .= '<b>Name : </b><br>'.$request->name.'<br><br>';
        $message .= '<b>Email : </b><br>'.$request->email.'<br><br>';
        $message .= '<b>Subject : </b><br>'.$request->subject.'<br><br>';
        $message .= '<b>Comment : </b>'.$request->comment;

        \Mail::to('wjlrcsmkbbc@gmail.com')->send(new Websitemail($subject,$message));

        return redirect()->route('#contact')->with('success', 'Pesan telah terkirim. Terima kasih!');
    }
}
