<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Post;
use App\Models\Like;
use App\Models\Comment;

class AdminController extends Controller
{
    public function index()
    {
        $posts = Post::all()->sortByDesc('likeCount');
        $data = [
            'users' => User::all(),
            'totalUsers' => User::count(),
            'posts' => $posts,
            'totalPosts' => Post::count(),
            'comments' => Comment::all(),
            'totalComments' => Comment::count(),
        ];
        return view('admin.dashboard', $data);
    }
}