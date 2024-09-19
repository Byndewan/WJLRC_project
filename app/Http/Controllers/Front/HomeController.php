<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Karya;
use App\Models\Kontak;
use App\Models\Tim;
use Illuminate\Http\Request;
use App\Models\HomePageItem;
use App\Models\Comment;
use App\Models\Reply;

class HomeController extends Controller
{
    public function index()
    {
        $page_data = Tim::where( 'id','3')->first();
        $data_kontak = Kontak::where('id','1')->first();
        $tim_data = Tim::orderBy('id','asc')->get();
        $karya_data = Karya::orderBy('id','asc')->limit(6)->get();
        $data_page = HomePageItem::where('id','1')->first();

        return view('front.home' , compact('karya_data','page_data','tim_data','data_page'))->with('data_kontak', $data_kontak);   
    }

    public function karya()
    {
        $data_karya = Karya::orderBy('id','asc')->get();
        return view('front.karya', compact('data_karya'));
    }

    public function detail_karya($id)
    {
        $karya_data = Karya::orderBy('id','asc')->get();
        $data_karya = Karya::where('id',$id)->first();
        return view('detail_halaman.detail_karya', compact('karya_data'))->with('data_karya', $data_karya);
        $comments = Comment::with('replies.user', 'user')->get();
        return view('detail_halaman.detail_karya', compact('comments'));
    }

    public function store_comment(Request $request)
    {
        $request->validate([
            'body' => 'required'
        ]);

        Comment::create([
            'user_id' => Auth::id(),
            'body' => $request->input('body'),
            'created_at' => now(),
        ]);

        return redirect()->back();
    }

    public function store(Request $request, $comment_id)
    {
        $request->validate([
            'body' => 'required'
        ]);
    
        Reply::create([
            'comment_id' => $comment_id,
            'user_id' => Auth::id(),
            'body' => $request->input('body'),
            'created_at' => now(),
        ]);
    
        return redirect()->back();
    }

    public function contact()
    {
        $page_data = HomePageItem::where('id',1)->first();
        return view('front.home', compact('page_data'));
    }
}
