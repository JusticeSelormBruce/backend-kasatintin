<?php

namespace App\Http\Controllers;

use App\Category;
use App\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{
    public function index()
    {
        $comments = Comment::with(['author', 'post'])->paginate(10);
        return view('model.comment.index', compact('comments'));
    }

    public function show($id)
    {
        $comment = Comment::findOrFail($id);
        return view('model.comment.show', compact('comment'));
    }
    public function store(Request $request)
    {
        $data = ['author_id' => Auth::id(), 'content' => $request->comment, 'post_id' => $request->id];
        Comment::create($data);
        return back();
    }
}
