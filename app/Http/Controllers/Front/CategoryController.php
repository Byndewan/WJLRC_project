<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function index(Request $request)
    {
        $karya_data = Category::all();

        if ($request->has('nama_kategori')) {
            $kategori_id = $request->input('karya_data');
            $karya_data = Category::where('id', $kategori_id)->get();
        }

        return view('front.karya', compact('karya_data'));
    }
}
