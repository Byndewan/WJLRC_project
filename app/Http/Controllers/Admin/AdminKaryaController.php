<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Karya;
use App\Models\Comment;
use App\Models\Category;
use Hash;

class AdminKaryaController extends Controller
{

    public function daftar_karya()
        {
            // $data_karya-Karya::latest()->get();
            // $data_karya = Karya::orderBy('id','asc')->get();
            $data_karya = Karya::with('kategori')->get();
                //    dd($data_karya);
            return view('admin.daftar_karya', compact('data_karya'));
        }

    public function tambah()
        {
            $kategori=Category::select('id','nama_kategori')->get();
            return view('admin.tambah_karya',compact('kategori'));
        }

    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required',
            'penulis' => 'required',
            'kategori_id' => 'required|exists:categories,id',
            'tanggal' => 'required',
            'deskripsi' => 'required',
        ]);

        $obj = new Karya();

        $ext = $request->file('photo')->extension();
        $final_name = 'karya_'.time().'.'.$ext;
        $request->file('photo')->move(public_path('uploads/'),$final_name);
        $obj->photo = $final_name;

        $obj->judul = $request->judul;
        $obj->penulis = $request->penulis;
        $obj->kategori_id = $request->kategori_id;
        $obj->tanggal = $request->tanggal;
        $obj->deskripsi = $request->deskripsi;
        $obj->save();

        return redirect()->route('daftar_karya')->with('success', 'Data is inserted successfully');
    }

    public function edit($id)
    {
        $kategori=Category::select('id','nama_kategori')->get();
        $row_data = Karya::where('id',$id)->first();
        return view('admin.edit_karya', compact('row_data','kategori'));
    }

    public function update(Request $request, $id)
{

    $obj = Karya::where('id',$id)->first();

        if($request->hasFile('photo')){
            $request->validate([
                'photo' => 'required|image|mimes:jpg,jpeg,png,gif'
            ]);

            unlink(public_path('uploads/'.$obj->photo));

            $ext = $request->file('photo')->extension();
            $final_name = 'karyax`_'.time().'.'.$ext;

            $request->file('photo')->move(public_path('uploads/'),$final_name);

            $obj->photo = $final_name;
        }

    $obj->judul = $request->judul;
    $obj->penulis = $request->penulis;
    $obj->kategori_id = $request->kategori_id;
    $obj->tanggal = $request->tanggal;
    $obj->deskripsi = $request->deskripsi;
    $obj->update();

    return redirect()->route('daftar_karya')->with('success', 'Data is updated successfully');
}

    public function delete($id)
    {
        $row_data = Karya::where('id',$id)->first();
        $row_data->delete();

        return redirect()->back()->with('success', 'Data is deleted successfully');
    }

    public function search(Request $request){
        if ($request->has('search')) {
            $data_karya = Karya::where('judul','LIKE','%'.$request->search.'%')->get();
        } else {
            $data_karya = Karya::all();
        }

        return view('admin.daftar_karya',['data_karya' => $data_karya]);

    }
}
