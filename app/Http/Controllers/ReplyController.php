<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reply;
use Auth;

class ReplyController extends Controller
{
    public function store(Request $request, $commentId)
    {
        $request->validate([
            'body' => 'required'
        ]);
    
        Reply::create([
            'comment_id' => $commentId,
            'user_id' => Auth::id(),
            'body' => $request->body
        ]);
    
        return redirect()->back();
    }
}
