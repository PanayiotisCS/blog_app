<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Like;

class LikeController extends Controller
{
    //

    public function store(Request $request)
    {
        $post = Post::find($request->post_id);
        if($post != null){
            $check_like = Like::where('user_id',$request->user_id)
                                ->where('post_id', $post->id)
                                ->first();
            if($check_like != null)
            {
                $like = Like::where('user_id',$request->user_id)->delete();
                $likeCount = $post->likeCount--;
                $post_data = [
                    'user_id' => $post->user->id,
                    'body' => $post->body,
                    'title' => $post->title,
                    'likeCount' => $likeCount
                ];
                $post->update($post_data);
                return response()->json(['success'=>'Post unliked!']);
            }else{
                $like = new Like();
                $like->post_id = $post->id;
                $like->user_id = $request->user_id;
                $like->save();
                $likeCount = $post->likeCount++;
                $post_data = [
                    'user_id' => $post->user->id,
                    'body' => $post->body,
                    'title' => $post->title,
                    'likeCount' => $likeCount
                ];
                $post->update($post_data);
                return response()->json(['success'=>'Post liked!']);
                
            }
        }
        return response()->json(['error'=> 'Something went wrong']);
    }
}
