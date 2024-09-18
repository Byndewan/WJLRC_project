<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Mading;

class AdminMadingController extends Controller
{
    public function daftar_mading()
    {
        $data_mading = Mading::orderBy('id','asc')->get();
        return view('admin.daftar_mading', compact('data_mading'));
    }

    public function tambah()
        {
            return view('admin.tambah_mading');
        }

    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required',
            'nama' => 'required',
            'tanggal' => 'required',
            'deskripsi' => 'required',
        ]);

        $obj = new Mading();

        $ext = $request->file('photo')->extension();
        $final_name = 'mading_'.time().'.'.$ext;
        $request->file('photo')->move(public_path('uploads/'),$final_name);
        $obj->photo = $final_name;

        $obj->judul = $request->judul;
        $obj->nama = $request->nama;
        $obj->tanggal = $request->tanggal;
        $obj->deskripsi = $request->deskripsi;
        $obj->save();

        return redirect()->route('daftar_mading')->with('success', 'Data is inserted successfully');
    }

    public function edit($id)
    {
        $row_data = Mading::where('id',$id)->first();
        return view('admin.edit_mading', compact('row_data'));
    }

    public function update(Request $request,$id)
    {

        $obj = Mading::where('id',$id)->first();

        if($request->hasFile('photo')){
            $request->validate([
                'photo' => 'required|image|mimes:jpg,jpeg,png,gif'
            ]);

            unlink(public_path('uploads/'.$obj->photo));

            $ext = $request->file('photo')->extension();
            $final_name = 'mading_'.time().'.'.$ext;

            $request->file('photo')->move(public_path('uploads/'),$final_name);

            $obj->photo = $final_name;
        }

        $obj->judul = $request->judul;
        $obj->nama = $request->nama;
        $obj->tanggal = $request->tanggal;
        $obj->deskripsi = $request->deskripsi;
        $obj->update();

        return redirect()->route('daftar_mading')->with('success', 'Data is updated successfully');
    }

    public function delete($id)
    {
        $row_data = Mading::where('id',$id)->first();
        $row_data->delete();

        return redirect()->back()->with('success', 'Data is deleted successfully');
    }

    public function search(Request $request){
        if ($request->has('search')) {
            $data_mading = Mading::where('judul','LIKE','%'.$request->search.'%')->get();
        } else {
            $data_mading = Mading::all();
        }

        return view('admin.daftar_mading',['data_mading' => $data_mading]);

    }
}
