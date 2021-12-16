<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Traits\UploadImage;
use App\Models\Profile;
use App\Models\Post;
class ProfileController extends Controller
{
    //
    use UploadImage;

    public function show(Profile $profile)
    {
        $profile = Profile::findOrFail($profile->id);
  
        $posts = $profile->user->posts;
        $data = [
            'profile' => $profile,
            'posts'     => $posts
        ];
        return view('profile.show', ['data' => $data]);
    }

    public function edit(Profile $profile)
    {
        if($profile->user->id != auth()->id())
        {
            return redirect()->route('posts.index')->with('error','Somethinig went wrong');
        }
        return view('profile.edit',['profile' => $profile]);
    }

    public function update(Profile $profile)
    {
        $request = request();
        $attributes = request()->validate([
            'email' => 'required',
            // 'profile_path' => 'image|mimes:png,jpg,gif'
        ]);
        
        if($request->hasFile('profile_path')){
            $attributes['profile_path'] = $this->UserImageUpload(request()->file('profile_path'));
        }
        $profile->user_id = auth()->id();
        $profile->address = $request->address;
        $profile->phone = $request->phone;
        $profile->profile_path = $attributes['profile_path'];
        $profile->save(); 

        $posts = $profile->user->posts;
        $data = [
            'profile'   => $profile,
            'posts'     => $posts
        ];
        
        return redirect()->route('posts.index')->with('message','Profile Updated!');
    }

    public function destroy(Profile $profile)
    {
        $user = $profile->user;
        $user->delete();
        return response()->json(['message' => 'Profile Deleted!']);
    }
}
