<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Konten;

class AdminKontenController extends Controller
{
    public function daftar_konten()
    {
        $konten_data = Konten::orderBy('id','asc')->get();
        return view('admin.daftar_konten', compact('konten_data'));
    }

    public function tambah()
        {
            return view('admin.tambah_konten');
        }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'kelas' => 'required',
            'judul' => 'required',
            'penulis' => 'required',
            'tanggal' => 'required',
            'deskripsi' => 'required',
        ]);

        $obj = new Konten();

        $ext = $request->file('photo')->extension();
        $final_name = 'konten_'.time().'.'.$ext;
        $request->file('photo')->move(public_path('uploads/'),$final_name);
        $obj->photo = $final_name;

        $obj->nama = $request->nama;
        $obj->kelas = $request->kelas;
        $obj->judul = $request->judul;
        $obj->penulis = $request->penulis;
        $obj->tanggal = $request->tanggal;
        $obj->deskripsi = $request->deskripsi;
        $obj->save();

        return redirect()->route('daftar_konten')->with('success', 'Data is inserted successfully');
    }

    public function edit($id)
    {
        $row_data = Konten::where('id',$id)->first();
        return view('admin.edit_konten', compact('row_data'));
    }

    public function update(Request $request,$id)
    {
        $request->validate([
            'nama' => 'required',
            'kelas' => 'required',
            'judul' => 'required',
            'penulis' => 'required',
            'tanggal' => 'required',
            'deskripsi' => 'required',
        ]);

        $obj = Konten::where('id',$id)->first();

        if($request->hasFile('photo')){
            $request->validate([
                'photo' => 'image|mimes:jpg,jpeg,png,gif'
            ]);

            unlink(public_path('uploads/'.$obj->photo));

            $ext = $request->file('photo')->extension();
            $final_name = 'konten_'.time().'.'.$ext;

            $request->file('photo')->move(public_path('uploads/'),$final_name);

            $obj->photo = $final_name;
        }

        $obj->nama = $request->nama;
        $obj->kelas = $request->kelas;
        $obj->judul = $request->judul;
        $obj->penulis = $request->penulis;
        $obj->tanggal = $request->tanggal;
        $obj->deskripsi = $request->deskripsi;
        $obj->update();

        return redirect()->route('daftar_konten')->with('success', 'Data is updated successfully');
    }

    public function delete($id)
    {
        $row_data = Konten::where('id',$id)->first();
        $row_data->delete();

        return redirect()->back()->with('success', 'Data is deleted successfully');
    }
}
