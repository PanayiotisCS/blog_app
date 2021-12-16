<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\Profile;
use App\Models\Post;
use App\Models\Comment;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    { 
        $admin = User::create([
            'name' => 'Admin',
            'email' => 'admin@admin.com',
            'type' => '1',
            'password' => Hash::make('password')
        ]);
        $admin_profile = Profile::create([
            'user_id' => $admin->id
        ]);
        $test_user = User::create([
            'name' => 'Normal User',
            'email' => 'user@user.com',
            'type' => '0',
            'password' => Hash::make('password')
        ]);
        $test_profile = Profile::create([
            'user_id' => $test_user->id
        ]);
        // $user = User::factory(1)->hasProfile()->create();
        //$posts = Post::factory(2)->hasComments(3)->create();
    }
}
