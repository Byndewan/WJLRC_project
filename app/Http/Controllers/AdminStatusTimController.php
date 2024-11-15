<?php

namespace App\Http\Controllers;

use App\Models\StatusTim;
use Illuminate\Http\Request;

class AdminStatusTimController extends Controller
{
    public function index()
    {
        $data_page = StatusTim::where('id',1)->first();
        return view('admin.status_tim', compact('data_page'));
    }

    public function store(Request $request)
    {
        $data_page = StatusTim::where('id',1)->first();

        $data_page->status = $request->status;
        $data_page->update();

        return redirect()->back()->with('success', 'Data berhasil di perbaharui.');
    }
}
