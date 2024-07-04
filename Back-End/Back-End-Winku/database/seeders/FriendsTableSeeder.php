<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FriendsTableSeeder extends Seeder
{
    public function run(): void
    {
        $users = User::all();

        if($users->count()<2){
            $this->command->info('There is no enough users');
            return;
        }

        foreach($users as $user){
            $friends = $users->where('id','!=',$user->id)->random(rand(1,$users->count()-1));

            foreach ($friends as $friend){

                if(!DB::table('friends')->where([
                 ['user_id','=',$user->id],
                 ['friend_id','=',$friend->id]
                ])->exists() && !DB::table('friends')->where([
                    ['user_id','=',$friend->id],
                    ['friend_id','=',$user->id]
                    ])->exists()){
                    $user->friends()->attach($friend->id);
                };
            }

        }

    }
}
