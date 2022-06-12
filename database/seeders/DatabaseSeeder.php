<?php

namespace Database\Seeders;

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
         \App\Models\User::factory(10)->create(['password' => rand(1000000000, 99999999999999)]);
         \App\Models\Post::factory()->count(5)->create();
    }
}
