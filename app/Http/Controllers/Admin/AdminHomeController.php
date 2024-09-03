<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Buku;
use App\Models\Peminjaman;
use App\Models\Karya;
use App\Models\Admin;
use App\Models\Mading;
use Hash;

class AdminHomeController extends Controller
{
    public function index()
    {
        $total_buku = Buku::all()->count();
        $total_peminjaman = Peminjaman::all()->count();
        $total_karya = Karya::all()->count();
        $total_mading = Mading::all()->count();
        $total_admin = Admin::all()->count();
        $admin_data = Admin::orderBy('id','asc')->get();
        return view('admin.home',compact('admin_data'))->with('total_admin',$total_admin)->with('total_mading',$total_mading)->with('total_karya',$total_karya)->with('total_peminjaman',$total_peminjaman)->with('total_buku',$total_buku);
    }

    public function tambah()
        {
            return view('admin.tambah_admin');
        }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
            'profesi' => 'required',
            'deskripsi' => 'required'
        ]);

        $obj = new Admin();

        $ext = $request->file('photo')->extension();
        $final_name = 'admin_'.time().'.'.$ext;
        $request->file('photo')->move(public_path('uploads/'),$final_name);
        $obj->photo = $final_name;

        $obj->name = $request->name;
        $obj->email = $request->email;
        $obj->password = Hash::make($request->password);
        $obj->profesi = $request->profesi;
        $obj->deskripsi = $request->deskripsi;
        $obj->save();

        return redirect()->route('admin_home')->with('success', 'Data is inserted successfully');
    }
}
