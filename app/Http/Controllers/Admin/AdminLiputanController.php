<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Liputan;
use Illuminate\Http\Request;

class AdminLiputanController extends Controller
{
    public function daftar_liputan()
    {
        $data_liputan = Liputan::orderBy('id','asc')->get();
        return view('admin.daftar_liputan', compact('data_liputan'));
    }

    public function tambah()
        {
            return view('admin.tambah_liputan');
        }

    public function store(Request $request)
    {
        $request->validate([
            'photo' => 'required|image',
            'judul' => 'required',
            'nama' => 'required',
            'tanggal' => 'required',
        ]);

        $obj = new Liputan();

        $ext = $request->file('photo')->extension();
        $final_name = 'liputan_'.time().'.'.$ext;
        $request->file('photo')->move(public_path('uploads/'),$final_name);
        $obj->photo = $final_name;

        $obj->nama = $request->nama;
        $obj->judul = $request->judul;
        $obj->tanggal = $request->tanggal;
        $obj->deskripsi = $request->deskripsi;
        $obj->save();

        return redirect()->route('daftar_liputan')->with('success', 'Data is inserted successfully');
    }

    public function edit($id)
    {
        $row_data = Liputan::where('id',$id)->first();
        return view('admin.edit_liputan', compact('row_data'));
    }

    public function update(Request $request,$id)
    {
        $obj = Liputan::where('id',$id)->first();

        if($request->hasFile('photo')){
            $request->validate([
                'photo' => 'required|image'
            ]);

            unlink(public_path('uploads/'.$obj->photo));

            $ext = $request->file('photo')->extension();
            $final_name = 'liputan_'.time().'.'.$ext;

            $request->file('photo')->move(public_path('uploads/'),$final_name);

            $obj->photo = $final_name;
        }

        $obj->nama = $request->nama;
        $obj->judul = $request->judul;
        $obj->tanggal = $request->tanggal;
        $obj->deskripsi = $request->deskripsi;
        $obj->update();

        return redirect()->route('daftar_liputan')->with('success', 'Data is updated successfully');
    }

    public function delete($id)
    {
        $row_data = Liputan::where('id',$id)->first();
        $row_data->delete();

        return redirect()->back()->with('success', 'Data is deleted successfully');
    }

    public function search(Request $request){
        if ($request->has('search')) {
            $data_liputan = Liputan::where('judul','LIKE','%'.$request->search.'%')->get();
        } else {
            $data_liputan = Liputan::all();
        }

        return view('admin.daftar_liputan',['data_liputan' => $data_liputan]);

    }
}
