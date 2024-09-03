<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Organigram;

class AdminOrganigramController extends Controller
{
    public function daftar_organigram()
    {
        $all_data = Organigram::orderBy('id','asc')->get();
        return view('admin.daftar_organigram', compact('all_data'));
    }

    public function tambah()
        {
            return view('admin.tambah_organigram');
        }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'icon1' => 'required',
            'icon_url1' => 'required',
            'icon2' => 'required',
            'icon_url2' => 'required',
            'jabatan' => 'required'
        ]);

        $obj = new Organigram();

        $ext = $request->file('photo')->extension();
        $final_name = 'organigram_'.time().'.'.$ext;
        $request->file('photo')->move(public_path('uploads/'),$final_name);
        $obj->photo = $final_name;

        $obj->nama = $request->nama;
        $obj->icon1 = $request->icon1;
        $obj->icon_url1 = $request->icon_url1;
        $obj->icon2 = $request->icon2;
        $obj->icon_url2 = $request->icon_url2;
        $obj->jabatan = $request->jabatan;
        $obj->save();

        return redirect()->route('daftar_organigram')->with('success', 'Data is inserted successfully');
    }

    public function edit($id)
    {
        $row_data = Organigram::where('id',$id)->first();
        return view('admin.edit_organigram', compact('row_data'));
    }

    public function update(Request $request,$id)
    {
        $request->validate([
            'nama' => 'required',
            'icon1' => 'required',
            'icon_url1' => 'required',
            'icon2' => 'required',
            'icon_url2' => 'required',
            'jabatan' => 'required'
        ]);

        $obj = Organigram::where('id',$id)->first();

        if($request->hasFile('photo')){
            $request->validate([
                'photo' => 'required|image|mimes:jpg,jpeg,png,gif'
            ]);

            unlink(public_path('uploads/'.$obj->photo));

            $ext = $request->file('photo')->extension();
            $final_name = 'organigram_'.time().'.'.$ext;

            $request->file('photo')->move(public_path('uploads/'),$final_name);

            $obj->photo = $final_name;
        }

        $obj->nama = $request->nama;
        $obj->icon1 = $request->icon1;
        $obj->icon_url1 = $request->icon_url1;
        $obj->icon2 = $request->icon2;
        $obj->icon_url2 = $request->icon_url2;
        $obj->jabatan = $request->jabatan;
        $obj->update();

        return redirect()->route('daftar_organigram')->with('success', 'Data is updated successfully');
    }

    public function delete($id)
    {
        $row_data = Organigram::where('id',$id)->first();
        $row_data->delete();

        return redirect()->back()->with('success', 'Data is deleted successfully');
    }
}
