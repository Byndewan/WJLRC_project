<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Karya;

class AdminKaryaController extends Controller
{

    public function daftar_karya()
        {
            $karya_data = Karya::orderBy('id','asc')->get();
            return view('admin.daftar_karya', compact('karya_data'));
        }

    public function tambah()
        {
            return view('admin.tambah_karya');
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

        $obj = new Karya();

        $ext = $request->file('photo')->extension();
        $final_name = 'karya_'.time().'.'.$ext;
        $request->file('photo')->move(public_path('uploads/'),$final_name);
        $obj->photo = $final_name;

        $obj->nama = $request->nama;
        $obj->kelas = $request->kelas;
        $obj->judul = $request->judul;
        $obj->penulis = $request->penulis;
        $obj->tanggal = $request->tanggal;
        $obj->deskripsi = $request->deskripsi;
        $obj->save();

        return redirect()->route('daftar_karya')->with('success', 'Data is inserted successfully');
    }

    public function edit($id)
    {
        $row_data = Karya::where('id',$id)->first();
        return view('admin.edit_karya', compact('row_data'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required',
            'kelas' => 'required',
            'judul' => 'required',
            'penulis' => 'required',
            'tanggal' => 'required',
            'deskripsi' => 'required',
        ]);

        $obj = Karya::where('id',$id)->first();

        $ext = $request->file('photo')->extension();
        $final_name = 'karya_'.time().'.'.$ext;
        $request->file('photo')->move(public_path('uploads/'),$final_name);
        $obj->photo = $final_name;

        $obj->nama = $request->nama;
        $obj->kelas = $request->kelas;
        $obj->judul = $request->judul;
        $obj->penulis = $request->penulis;
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
}
