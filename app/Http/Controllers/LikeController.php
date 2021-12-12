<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Like;

class LikeController extends Controller
{
    //

    public function like($id)
    {
        Like::create([
            'post_id' => Post::find($id)->id,
        ]);
    }
}
