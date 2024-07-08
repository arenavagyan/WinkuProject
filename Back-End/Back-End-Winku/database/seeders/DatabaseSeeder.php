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
        // User::factory(10)->create();
        Image::factory()->count(15)->create();

       $users = User::factory()
            ->count(15)
            ->sequence(
                ['name' => 'Janice Griffith','email' => 'griffith@gmail.com', 'password' => bcrypt('PASS')],
                ['name' => 'Sara Gray'],
            )
            ->create();





        $users->each(function ($user) {
            Post::factory()->count(3)
                ->state(new Sequence(['imageUrl'=>'example.jpeg'],
                            ['imageUrl'=>'istockphoto-1329622588-1024x1024.jpg'],
                            ['imageUrl'=>'pexels-arshamhaghani-3536991.jpg' ],
                            ))
                ->create(['user_id' => $user->id]);

        });

        Comment::factory()->count(2)->create();
        $this->call([
            FriendsTableSeeder::class
        ]);


    }
}
