<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;
use App\Models\Post;

class CommentController extends Controller
{
    //
    public function store(Request $request)
    {
        
        $comment = new Comment;
        $attributes = request()->validate([
            'comment' => 'required'
        ]);
        
        $comment->body = $request->get('comment');
        $comment->user_id = auth()->id();
        $post = Post::find($request->get('post_id'));
        $post->comments()->save($comment);

        return redirect('/')->with('success','Comment Added!');
    }
}
