<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'comment' => 'required',
        ]);
        // save comment if user has not commented before else update
        if(Comment::where('user_id', Auth::user()->id)->where('post_id', $request->post_id)->exists()){
            $comment = Comment::where('user_id', Auth::user()->id)->where('post_id', $request->post_id)->first();
            $comment->comment = $request->comment;
            $comment->update();
        }else{
            $comment = new Comment();
            $comment->comment = $request->comment;
            $comment->user_id = Auth::user()->id;
            $comment->post_id = $request->post_id;
            $comment->save();
        }
        return redirect()->back()->with('status', 'Comment posted successfully');
    }

}
