<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Kontak;

class AdminKontakController extends Controller
{
    public function daftar_kontak()
    {
        $data_kontak = Kontak::orderBy('id','asc')->get();
        return view('admin.daftar_kontak', compact('data_kontak'));
    }

    public function tambah()
    {
        return view('admin.tambah_kontak');
    }

    public function store(Request $request)
    {
        $request->validate([
            'alamat' => 'required',
            'notlp' => 'required',
            'email' => 'required',
        ]);

        $obj = new Kontak();
        $obj->alamat = $request->alamat;
        $obj->notlp = $request->notlp;
        $obj->email = $request->email;
        $obj->save();

        return redirect()->route('admin_daftar_kontak')->with('success', 'Data is inserted successfully');
    }

    public function edit($id)
    {
        $row_data = Kontak::where('id',$id)->first();
        return view('admin.edit_kontak', compact('row_data'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'alamat' => 'required',
            'notlp' => 'required',
            'email' => 'required',
        ]);

        $obj = Kontak::where('id',$id)->first();
        $obj->alamat = $request->alamat;
        $obj->notlp = $request->notlp;
        $obj->email = $request->email;
        $obj->update();

        return redirect()->route('admin_daftar_kontak')->with('success', 'Data is updated successfully');
    }

    public function delete($id)
    {
        $row_data = Kontak::where('id',$id)->first();
        $row_data->delete();

        return redirect()->back()->with('success', 'Data is deleted successfully');
    }
}
