<?php

namespace Database\Seeders;

use App\Models\Confession;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Comments;
use Faker\Factory as Faker;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // Seed User
        $faker = Faker::create();
        $user = User::factory()->create([
            'email' => 'test@example.com',
            'password' => 'testpass',
            
        ]);

        User::factory(4)->create();

        // Seed Confession
        $faker = Faker::create();
        for($i=0; $i<20; $i++){
            $username = User::inRandomOrder()->value('username');
            $userID = User::where('username', $username)->value('id');
            Confession::factory()->create([
                'username' => $faker->randomElement([$username]),
                'user_id' => $faker->randomElement([$userID]),
                'numberOfLikes' => $faker->numberBetween(0, 1000),
                'numberOfDislikes' => $faker->numberBetween(0, 1000),
            ]);
        }


        for($i=0; $i<1000; $i++){
            Comments::factory()->create([
                'confession_id' => $faker->randomElement([Confession::inRandomOrder()->value('id')]),
            ]);
        }
    }
}
