<?php

namespace Database\Seeders;

use App\Models\Comment;
use App\Models\Follow;
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

       $users = User::factory()
            ->count(5)
            ->sequence(
                ['name' => 'Janice Griffith','email' => 'griffith@gmail.com', 'password' => bcrypt('PASS'),'avatar'=>'user-avatar.jpg'],
                ['name' => 'Sara Gray','avatar'=>'1.jpg'],
                ['avatar'=>'1.jpg'],['avatar'=>'1.jpg'],['avatar'=>'22.jpg'],
                ['avatar'=>'6.jpg'],
                ['avatar'=>'7.jpg'],
                ['avatar'=>'8.jpg'],
                ['avatar'=>'9.jpg'],
                ['avatar'=>'10.jpg'],
                ['avatar'=>'11.jpg'],
                ['avatar'=>'12.jpg'],['avatar'=>'13.jpg'],
                ['avatar'=>'14.jpg'],['avatar'=>'15.jpg'],
            )
            ->create();

        Follow::factory()
            ->count(5)
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
