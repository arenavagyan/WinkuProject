<?php

namespace Database\Seeders;

use App\Models\Comment;
use App\Models\Follow;
use App\Models\Image;
use App\Models\Post;
use App\Models\User;
use Database\Factories\PostFactory;
use Illuminate\Database\Eloquent\Factories\Sequence;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Image::factory()->count(20)->create();

       $users = User::factory()
            ->count(15)
            ->create();





       $users->each(function ($user) {
            Post::factory()->count(1)
                ->create(['user_id' => $user->id]);

        });

        Comment::factory()->count(2)->create();
        $this->call([
            FriendsTableSeeder::class
        ]);


    }
}
