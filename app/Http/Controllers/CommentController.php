<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Comment;
use App\Models\Post;

class CommentController extends Controller
{
    //
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'body' => 'required',
        ]);

        if($validator->passes()){
        
            $comment = new Comment;
            $comment->body = $request->get('body');
            $comment->user_id = auth()->id();
            $post = Post::find($request->get('post_id'));
            $post->comments()->save($comment);

            
            // return redirect('/')->with('success','Comment Added!');
            return response()->json(['message'=>'Comment Added!']);
        }
        return response()->with(['error'=>$validator->errors()]);
    }
}
