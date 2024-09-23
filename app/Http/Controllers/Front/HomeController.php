<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Karya;
use App\Models\Kontak;
use App\Models\Tim;
use Auth;
use Illuminate\Http\Request;
use App\Models\HomePageItem;
use App\Models\Comment;
use App\Models\Category;
use App\Models\Reply;

class HomeController extends Controller
{
    public function index()
    {
        $page_data = Tim::where('id', '3')->first();
        $data_kontak = Kontak::where('id', '1')->first();
        $tim_data = Tim::orderBy('id', 'asc')->get();
        $karya_data = Karya::orderBy('id', 'asc')->limit(6)->get();
        $data_page = HomePageItem::where('id', '1')->first();

        return view('front.home', compact('karya_data', 'page_data', 'tim_data', 'data_page'))->with('data_kontak', $data_kontak);
    }


    public function karya()
    {
        $karya = Karya::orderBy('created_at', 'desc');

<<<<<<< HEAD

=======
        $karya_data = Karya::orderBy('id','asc')->get();
>>>>>>> d77676bcb63b1901a661ac39e038ed5d82115eaa
        $data_page = HomePageItem::where('id', 1)->first();
        $data_karya = Karya::orderBy('id', 'asc')->get();
        return view('front.karya', compact('data_karya','data_page','karya'));
    }

    public function detail_karya(Karya $karya, Request $request, $id)
    {

        $karya = Karya::orderBy('created_at', 'desc');
        $karya = Karya::where('id', $id)->first();
        $karya_data = Category::where('id', 1)->get();
        $data_page = HomePageItem::where('id', '1')->first();
        $data_karya = Karya::where('id', '1')->first();
        $karya_data = Karya::orderBy('id', 'asc')->get();
        return view('front.karya', compact('karya_data','data_page','karya_data'))->with('data_karya');
    }

    public function kategori(Request $request)
    {
        $karya_data = Category::orderBy('id','asc')->get();
        $data_page = HomePageItem::where('id', '1')->first();

        if ($request->has('nama_kategori')) {
            $kategori_id = $request->input('karya_data');
            $karya_data = Category::where('id', $kategori_id)->get();
        } else {
            $karya_data = Category::all();
        }

        return view('front.karya', compact('karya_data','data_page'));
    }


    // public function detail_karya($id)
    // {
    //     $comments = Comment::with('replies.user', 'user')->get();
    //     $data_page = HomePageItem::where('id','1')->first();
    //     $karya_data = Karya::orderBy('id','asc')->get();
    //     $data_karya = Karya::where('id',$id)->first();
    //     return view('detail_halaman.detail_karya', compact('karya_data', 'data_page','karya'))->with('data_karya', $data_karya);
    // }

    public function search_karya(Request $request)
    {
        $data_page = HomePageItem::where('id', '1')->first();

        if ($request->has('search')) {
            $karya_data = Karya::where('judul','LIKE','%'.$request->search.'%')->get();
        } else {
            $karya_data = Karya::all();
        }

        return view('front.karya',['karya_data' => $karya_data])->with('data_page',$data_page);
    }

    public function contact()
    {
        $page_data = HomePageItem::where('id', 1)->first();
        return view('front.home', compact('page_data'));
    }
}
