<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Company;
use App\Models\User;
use App\Models\Post;
use App\Models\UserPost;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
           /*Company::factory()
                ->count(1000)
                ->has(User::factory()->count(50))
                ->create();*/

       UserPost::factory()
           ->count(20)
           ->has(Post::factory()->count(5))
           ->create();

        // $this->call(UserSeeder::class
    }
}
