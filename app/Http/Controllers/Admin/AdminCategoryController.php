<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;

class AdminCategoryController extends Controller
{
    public function daftar_kategori()
    {
        $data_kategori = Category::orderBy('created_at','desc')->get();
        return view('admin.daftar_kategori',['data_kategori' => $data_kategori]);
    }

public function tambah()
    {
        return view('admin.tambah_kategori');
    }

public function store(Request $request)
{
    $request->validate([
        'nama_kategori' => 'required',
        'keterangan' => 'required'
    ]);

    $obj = new Category();

    $obj->nama_kategori = $request->nama_kategori;
    $obj->keterangan = $request->keterangan;
    $obj->save();

    return redirect()->route('daftar_kategori')->with('success', 'Data is inserted successfully');
}

public function edit($id)
{
    $data_row = Category::where('id',$id)->first();
    return view('admin.edit_kategori', compact('data_row'));
}

public function update(Request $request, $id)
{
    $obj = Category::where('id', $id)->first();

    $obj->nama_kategori = $request->nama_kategori;
    $obj->keterangan = $request->keterangan;
    $obj->update();

    return redirect()->route('daftar_kategori')->with('success', 'Data is updated successfully');
}

public function delete($id)
{
    $data_row = Category::where('id',$id)->first();
    $data_row->delete();

    return redirect()->back()->with('success', 'Data is deleted successfully');
}

public function search(Request $request){
    if ($request->has('search')) {
        $data_kategori = Category::where('kategori','LIKE','%'.$request->search.'%')->get();
    } else {
        $data_kategori = Category::all();
    }

    return view('admin.daftar_kategori',['data_kategori' => $data_kategori]);

}
}
