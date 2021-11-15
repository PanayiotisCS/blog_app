<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
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
        // Truncate tables, to avoid any unique erros.
        // User::truncate();
        // Post::truncate();

        //  $user = User::create([
        //      'name' => Str::random(10),
        //      'email' => Str::random(10).'@swansea.ac.uk',
        //      'password' => Hash::make('password')
        //  ]);

        //  Post::create([
        //      'user_id' => $user->id,
        //      'title' => 'New Post',
        //      'excerpt' => 'Lorem ipsum dolar sit amet.',
        //      'body' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce pellentesque, quam a commodo vehicula, lorem enim rhoncus urna, a ullamcorper turpis massa a nisl. Vivamus in luctus mauris. Etiam hendrerit sapien in enim congue ultrices. Aliquam erat volutpat. Proin at nibh tincidunt, cursus mauris in, sodales nulla. Ut at ante massa. Integer tortor lacus, cursus finibus blandit quis, egestas vel ex.'
        //  ]);
        
        User::factory(5)->has(Post::factory(2)->has(Comment::factory(2),'comments'),'posts')->create();
    }
}
