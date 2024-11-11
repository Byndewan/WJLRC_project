<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tim;

class AdminTimController extends Controller
{
    public function daftar_tim()
    {
        $data_tim = Tim::orderBy('id','asc')->get();
        return view('admin.daftar_tim', compact('data_tim'));
    }

    public function tambah()
        {
            return view('admin.tambah_tim');
        }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'profesi' => 'required',
            'icon1' => 'required',
            'icon1_url' => 'required',
            'icon2' => 'required',
            'icon2_url' => 'required',
            'icon3' => 'required',
            'icon3_url' => 'required',
            'status' => 'required'
        ]);

        $obj = new Tim();

        $ext = $request->file('photo')->extension();
        $final_name = 'Tim_'.time().'.'.$ext;
        $request->file('photo')->move(public_path('uploads/'),$final_name);
        $obj->photo = $final_name;

        $obj->nama = $request->nama;
        $obj->profesi = $request->profesi;
        $obj->icon1 = $request->icon1;
        $obj->icon1_url = $request->icon1_url;
        $obj->icon2 = $request->icon2;
        $obj->icon2_url = $request->icon2_url;
        $obj->icon3 = $request->icon3;
        $obj->icon3_url = $request->icon3_url;
        $obj->icon4 = $request->icon4;
        $obj->icon4_url = $request->icon4_url;
        $obj->icon5 = $request->icon5;
        $obj->icon5_url = $request->icon5_url;
        $obj->save();

        return redirect()->route('admin_daftar_tim')->with('success', 'Data is inserted successfully');
    }

    public function edit($id)
    {
        $row_data = Tim::where('id',$id)->first();
        return view('admin.edit_tim', compact('row_data'));
    }

    public function update(Request $request,$id)
    {

        $obj = Tim::where('id',$id)->first();

        if($request->hasFile('photo')){
            $request->validate([
                'photo' => 'required|image|mimes:jpg,jpeg,png,gif'
            ]);

            unlink(public_path('uploads/'.$obj->photo));

            $ext = $request->file('photo')->extension();
            $final_name = 'tim_'.time().'.'.$ext;

            $request->file('photo')->move(public_path('uploads/'),$final_name);

            $obj->photo = $final_name;
        }

        $obj->nama = $request->nama;
        $obj->profesi = $request->profesi;
        $obj->icon1 = $request->icon1;
        $obj->icon1_url = $request->icon1_url;
        $obj->icon2 = $request->icon2;
        $obj->icon2_url = $request->icon2_url;
        $obj->icon3 = $request->icon3;
        $obj->icon3_url = $request->icon3_url;
        $obj->icon4 = $request->icon4;
        $obj->icon4_url = $request->icon4_url;
        $obj->icon5 = $request->icon5;
        $obj->icon5_url = $request->icon5_url;
        $obj->update();

        return redirect()->route('admin_daftar_tim')->with('success', 'Data is updated successfully');
    }

    public function delete($id)
    {
        $row_data = Tim::where('id',$id)->first();
        $row_data->delete();

        return redirect()->back()->with('success', 'Data is deleted successfully');
    }

    public function search(Request $request){
        if ($request->has('search')) {
            $data_tim = Tim::where('nama','LIKE','%'.$request->search.'%')->get();
        } else {
            $data_tim = Tim::all();
        }

        return view('admin.daftar_tim',['data_tim' => $data_tim]);

    }
}
