<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\HomePageItem;

class AdminHomePageController extends Controller
{
    public function index()
    {
        $data_page = HomePageItem::where('id',1)->first();
        return view('admin.home_banner_show', compact('data_page'));
    }

    public function store(Request $request)
    {
        $data_page = HomePageItem::where('id',1)->first();

        $request->validate([
            'banner_title' => 'required',
            'banner_subtitle' => 'required'
        ]);

        $data_page->banner_title = $request->banner_title;
        $data_page->banner_subtitle = $request->banner_subtitle;
        $data_page->update();

        return redirect()->back()->with('success', 'Data is updated successfully.');
    }

    public function footer()
    {
        $data_page = HomePageItem::where('id','1')->first();
        return view('admin.home_footer_show')->with('data_page', $data_page);
    }

    public function footer_update(Request $request)
    {
        $data_page = HomePageItem::where('id',1)->first();

        $request->validate([
            'footer_title' => 'required',
            'footer_subtitle' => 'required',
            'heading_1' => 'required',
            'heading_2' => 'required',
            'alamat' => 'required',
            'country' => 'required',
            'no_telepon' => 'required',
            'email' => 'required'
        ]);

        $data_page->footer_title = $request->footer_title;
        $data_page->footer_subtitle = $request->footer_subtitle;
        $data_page->icon_1 = $request->icon_1;
        $data_page->icon_1_url = $request->icon_1_url;
        $data_page->icon_2 = $request->icon_2;
        $data_page->icon_2_url = $request->icon_2_url;
        $data_page->icon_3 = $request->icon_3;
        $data_page->icon_3_url = $request->icon_3_url;
        $data_page->icon_4 = $request->icon_4;
        $data_page->icon_4_url = $request->icon_4_url;
        $data_page->icon_5 = $request->icon_5;
        $data_page->icon_5_url = $request->icon_5_url;
        $data_page->heading_1 = $request->heading_1;
        $data_page->name_url_1 = $request->name_url_1;
        $data_page->url_1 = $request->url_1;
        $data_page->name_url_2 = $request->name_url_2;
        $data_page->url_2 = $request->url_2;
        $data_page->name_url_3 = $request->name_url_3;
        $data_page->url_3 = $request->url_3;
        $data_page->name_url_4 = $request->name_url_4;
        $data_page->url_4 = $request->url_4;
        $data_page->name_url_5 = $request->name_url_5;
        $data_page->url_5 = $request->url_5;
        $data_page->heading_2 = $request->heading_2;
        $data_page->alamat = $request->alamat;
        $data_page->country = $request->country;
        $data_page->no_telepon = $request->no_telepon;
        $data_page->email = $request->email;
        $data_page->update();

        return redirect()->back()->with('success', 'Data is updated successfully.');
    }
}
