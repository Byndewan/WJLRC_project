<?php

namespace App\Http\Controllers;

use App\Models\Karya;
use Illuminate\Http\Request;

class KaryaLikeController extends Controller
{
    public function like(Karya $karya){
        $liker = auth()->user();

        $liker->likes()->attach($karya);
        return redirect()->route('detail_karya',$karya->id)->with('success', 'Kamu Menyukai Karya Ini');
    }

    public function unlike(Karya $karya){
        $liker = auth()->user();

        $liker->likes()->detach($karya);
        return redirect()->route('detail_karya',$karya->id)->with('success', 'Kamu Menyukai Karya Ini');
    }
}
