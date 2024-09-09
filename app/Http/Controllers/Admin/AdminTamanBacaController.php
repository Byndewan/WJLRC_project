<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Buku;
use App\Models\Peminjaman;

class AdminTamanBacaController extends Controller
{

    public function daftar_buku()
    {
        $buku_data = Buku::orderBy('id','asc')->get();
        return view('admin.daftar_buku', compact('buku_data'));
    }

    public function tambah()
    {
        return view('admin.tambah_buku');
    }

    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required',
            'status' => 'required'
        ]);

        $obj = new Buku();
        $obj->judul = $request->judul;
        $obj->status = $request->status;
        $obj->save();

        return redirect()->route('admin_daftar_buku')->with('success', 'Data is inserted successfully');
    }

    public function edit($id)
    {
        $row_data = Buku::where('id',$id)->first();
        return view('admin.edit_buku', compact('row_data'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'judul' => 'required',
            'status' => 'required'
        ]);

        $obj = Buku::where('id',$id)->first();
        $obj->judul = $request->judul;
        $obj->status = $request->status;
        $obj->update();

        return redirect()->route('admin_daftar_buku')->with('success', 'Data is updated successfully');
    }

    public function delete($id)
    {
        $row_data = Buku::where('id',$id)->first();
        $row_data->delete();

        return redirect()->back()->with('success', 'Data is deleted successfully');
    }



    public function daftar_peminjaman()
    {
        $peminjaman_data = Peminjaman::orderBy('id','asc')->get();
        return view('admin.daftar_peminjaman', compact('peminjaman_data'));
    }
    public function tambah_data()
    {
        return view('admin.tambah_peminjaman');
    }

    public function store_data(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'kelas' => 'required',
            'judul' => 'required',
            'tanggal_peminjaman' => 'required',
            'tanggal_pengembalian' => 'required',
            'status' => 'required',
        ]);

        $obj = new Peminjaman();

        $ext = $request->file('photo')->extension();
        $final_name = 'peminjaman_'.time().'.'.$ext;
        $request->file('photo')->move(public_path('uploads/'),$final_name);
        $obj->photo = $final_name;

        $obj->nama = $request->nama;
        $obj->kelas = $request->kelas;
        $obj->judul = $request->judul;
        $obj->status = $request->status;
        $obj->save();

        return redirect()->route('admin_daftar_peminjaman')->with('success', 'Data is inserted successfully');
    }

    public function edit_data($id)
    {
        $row_data = Peminjaman::where('id',$id)->first();
        return view('admin.edit_peminjaman', compact('row_data'));
    }

    public function update_data(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required',
            'kelas' => 'required',
            'judul' => 'required'
        ]);

        $obj = Peminjaman::where('id',$id)->first();

        if($request->hasFile('photo')){
            $request->validate([
                'photo' => 'required|image|mimes:jpg,jpeg,png,gif'
            ]);

            unlink(public_path('uploads/'.$obj->photo));

            $ext = $request->file('photo')->extension();
            $final_name = 'peminjaman_'.time().'.'.$ext;

            $request->file('photo')->move(public_path('uploads/'),$final_name);

            $obj->photo = $final_name;
        }

        $obj->nama = $request->nama;
        $obj->kelas = $request->kelas;
        $obj->judul = $request->judul;
        $obj->update();

        return redirect()->route('admin_daftar_peminjaman')->with('success', 'Data is updated successfully');
    }

    public function delete_data($id)
    {
        $row_data = Peminjaman::where('id',$id)->first();
        $row_data->delete();

        return redirect()->back()->with('success', 'Data is deleted successfully');
    }
}
