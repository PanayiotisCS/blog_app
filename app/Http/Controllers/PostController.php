<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    //
    public function index()
    {
        $data = Post::all();
        return view('posts.index', ['posts' => $data]);
    }

    // public function show($id)
    // {
    //     return view('posts', 
    //     ['post' => Post::findOrFail($id)
    //     ]);
    // }

}
