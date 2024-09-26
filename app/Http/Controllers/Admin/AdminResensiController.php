<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Resensi;

class AdminResensiController extends Controller
{
    public function daftar_resensi()
    {
        $data_resensi = Resensi::orderBy('created_at','desc')->get();
        return view('admin.daftar_resensi', compact('data_resensi'));
    }

    public function tambah()
        {
            return view('admin.tambah_resensi');
        }

    public function store(Request $request)
    {
        $request->validate([
            'photo' => 'required',
            'nama' => 'required',
            'kelas' => 'required',
            'judul' => 'required',
            'penulis' => 'required',
            'tanggal' => 'required',
            'deskripsi' => 'required',
        ]);

        $obj = new Resensi();

        $ext = $request->file('photo')->extension();
        $final_name = 'resensi_'.time().'.'.$ext;
        $request->file('photo')->move(public_path('uploads/'),$final_name);
        $obj->photo = $final_name;

        $obj->nama = $request->nama;
        $obj->kelas = $request->kelas;
        $obj->judul = $request->judul;
        $obj->penulis = $request->penulis;
        $obj->tanggal = $request->tanggal;
        $obj->deskripsi = $request->deskripsi;
        $obj->save();

        return redirect()->route('daftar_resensi')->with('success', 'Data is inserted successfully');
    }

    public function edit($id)
    {
        $row_data = Resensi::where('id',$id)->first();
        return view('admin.edit_resensi', compact('row_data'));
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

        $obj = Resensi::where('id',$id)->first();

        if($request->hasFile('photo')){
            $request->validate([
                'photo' => 'image|mimes:jpg,jpeg,png,gif'
            ]);

            unlink(public_path('uploads/'.$obj->photo));

            $ext = $request->file('photo')->extension();
            $final_name = 'resensi_'.time().'.'.$ext;

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

        return redirect()->route('daftar_resensi')->with('success', 'Data is updated successfully');
    }

    public function delete($id)
    {
        $row_data = Resensi::where('id',$id)->first();
        $row_data->delete();

        return redirect()->back()->with('success', 'Data is deleted successfully');
    }

    public function search(Request $request){
        if ($request->has('search')) {
            $data_resensi = Resensi::where('nama', 'LIKE','%'.$request->search.'%')->get();
        } else {
            $data_resensi = Resensi::all();
        }

        return view('admin.daftar_resensi',['data_resensi' => $data_resensi]);

    }
}
