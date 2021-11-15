<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;
use App\Models\Post;
use App\Models\Comment;
class CommentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            'post_id' => Post::factory(),
            'user_id' => User::factory(),
            'body' => $this->faker->sentence
            //Comment::factory()->count(3)->for(User::factory())->create()
        ];
    }
}
