<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;
use Auth;

class CommentController extends Controller
{
    public function index()
    {
        $comments = Comment::with('replies.user', 'user')->get();
        return view('detail_halaman.detail_karya', compact('comments'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'body' => 'required'
        ]);

        Comment::create([
            'user_id' => Auth::id(),
            'body' => $request->input('body'),
            'created_at' => now(),
        ]);

        return redirect()->back();
    }
}
