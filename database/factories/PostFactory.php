<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            // create the user grab the id and assign it to 'user_id'
            'user_id' => User::factory(),
            'title' => $this->faker->sentence,
            'body'=> $this->faker->paragraph
        ];
    }
}