<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        factory(App\User::class, rand(3, 5))->create()->each(function($user){
            $user->questions()->saveMany(factory(App\Question::class, rand(0, 10))->make());
        });
    }
}
