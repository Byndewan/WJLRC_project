<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tim;

class AdminTimController extends Controller
{
    public function team($id)
    {
        $tim_data = Tim::where('id',$id)->first();
        return view('admin.tim', compact('tim_data'));
    }

    public function store(Request $request, $id)
    {
        $request->validate([
            'status' => 'required'
        ]);

        $tim_data = Tim::where('id',$id)->first();
        $tim_data->status = $request->status;
        $tim_data->update();

        return redirect()->back()->with('success', 'Data is updated successfully');
    }
}
