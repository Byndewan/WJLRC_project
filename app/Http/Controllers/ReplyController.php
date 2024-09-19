<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reply;
use Auth;

class ReplyController extends Controller
{

    public function store(Request $request, $comment_id)
    {
        $request->validate([
            'body' => 'required'
        ]);
    
        Reply::create([
            'comment_id' => $comment_id,
            'user_id' => Auth::id(),
            'body' => $request->body
        ]);
    
        return redirect()->back();
    }
}
