<?php

namespace App\Http\Controllers;

use App\Models\Karya;
use Exception;
use Illuminate\Http\Request;
use App\Models\Comment;
use Auth;

class CommentController extends Controller
{
    public function index(Request $request ,$id)
    {
        $karya_data = Karya::orderBy('id', 'asc')->get();
        $data_karya = Karya::where('id', $id)->first();
        $comments = Comment::with('replies.user', 'user')->get();
        return view('detail_halaman.detail_karya', compact('comments','data_karya', 'karya_data'));
    }

    public function store(Request $request)
{
    $request->validate([
        'body' => 'required',
    ]);

    if ($request->errors()->any()) {
        return redirect()->back()->withErrors($request->errors());
    }

    if (!Auth::check()) {
        return redirect()->back()->withErrors(['User is not authenticated']);
    }

    try {
        // $comment = Comment::create([
        //     'user_id' => Auth::id(),
        //     'body' => $request->input('body'),
        //     'created_at' => now(),
        // ]);

        $comment = new Comment();
        $comment->user_id = $request->input('user_id');
        $comment->body = $request->input('body');
        $comment->save();

        if (!$comment) {
            throw new Exception('Failed to create comment');
        }

        return redirect()->back()->with('success', 'Comment created successfully');
    } catch (Exception $e) {
        return redirect()->back()->withErrors(['Error creating comment: ' . $e->getMessage()]);
    }
}
}
