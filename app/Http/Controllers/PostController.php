<?php

namespace App\Http\Controllers;

use App\Models\Like;
use App\Models\Post;
use App\Models\Comment;
use App\Http\Traits\UploadImage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;

class PostController extends Controller
{
    //
    use UploadImage;
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
            $data = [
                'post'      => $post,
                // 'comments'  => $post->comments->sortByDesc('created_at'),
                'comments'  => Comment::where('post_id',$post->id)->paginate(5),
                'totaLikes' => $post->likes->count()
            ];
            return view('posts.show', ['data' => $data]);
        }
        return redirect()->route('posts.index')->with('error','Something went wrong');
    }

    public function store(Request $request)
    {    
        $attributes = request()->validate([
            'title' => 'required',
            'body'  => 'required',
            'image' => 'image|mimes:png,jpg,jpeg'
        ]);
        $filepath="";
        if(request()->file('image')){
            $filepath = $this->UserImageUpload(request()->file('image'));
        }
        $post = new Post();
        $post->user_id = auth()->id();
        $post->title = $attributes['title'];
        $post->body = $attributes['body'];
        $post->image_path = $filepath;
        $post->save();
        
        return redirect()->route('posts.index')->with('message','Post Submited!');
    }

    public function edit(Post $post)
    {
        if($post->user != auth()->user())
        {
            return redirect()->route('posts.index')->with('error','Somethinig went wrong');
        }
        return view('posts.edit',['post' => $post]);
    }

    public function update(Post $post)
    {   
        $attributes = request()->validate([
            'title' => 'required',
            'body'  => 'required',
        ]);

        if(isset($attributes['image_path'])){
            // $this->validate($request,[
            //     'image_path' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            // ]);
            Validator::make(request(),[
                'image_path' => ['nullable','image','max:2048']
            ]);
            $attributes['image_path'] = $this->UserImageUpload(request()->file('image_path'));
        }
        
        $post->user_id = auth()->id();
        $post->title = $attributes['title'];
        $post->body = $attributes['body'];
        $post->image_path = $attributes['image_path'];
        $post->save(); 

        return redirect()->route('posts.index')->with('message','Post Updated!');
    
    }

    public function destroy(Post $post)
    {
        $post->delete();
        return response()->json(['message' => 'Post Deleted!']);
    }
}
