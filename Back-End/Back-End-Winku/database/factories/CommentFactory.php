<?php

namespace Database\Factories;

use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Comment>
 */
class CommentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'postId'=> fake()->unique()->numberBetween(1,3),
            'userId'=> fake()->numberBetween(1,15),
            'text' => fake()->text(20),
            'isMainComment'=>fake()->boolean(),


        ];
    }
}
