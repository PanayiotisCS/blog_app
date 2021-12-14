<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    //
    public function index()
    {
        return view('posts.index', ['posts' => Post::all()->sortByDesc('updated_at')]);
    }

    public function create()
    {
        return view('posts.create');
    }
    
    public function show(Request $request)
    {
        if(Post::find($request->id) != null){

            $post = Post::find($request->id);
            
            return view('posts.show', ['post'=>$post]);
        }
        
        return redirect()->route('posts.index')->with('error','Something went wrong');
    }

    public function store()
    {    
        $attributes['user_id'] = auth()->id();

        $attributes = request()->validate([
            'title' => 'required',
            'body' => 'required'
        ]);
        
        Post::create([
            'user_id' => auth()->id(),
            'title' => $attributes['title'],
            'body' => $attributes['body']
        ]);

        return redirect('/')->with('success','Post Submited!');
    }

    public function edit(Post $post)
    {
        return view('posts.edit',['post' => $post]);
    }

    public function update(Post $post)
    {
        $attributes = request()->validate([
            'title' => 'required',
            'body' => 'required'
        ]);

        $attributes['user_id'] = auth()->id();

        $post->update($attributes);

        return redirect('/');
    }
}
