<?php

namespace App\Http\Controllers;

use App\Models\Karya;
use App\Models\Comment;

class CommentController extends Controller
{

    public function store(Karya $karya){


        $comment = new Comment();
        $comment->karya_id = $karya->id;
        $comment->body = request()->get('body');
        $comment->save();

        return redirect()->route('detail_karya',$karya->id)->with('success','Komentar terkirim');
    }

}
