<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Comment;
use App\Models\Company;
use App\Models\Feature;
use App\Models\User;
use App\Models\Post;
use App\Models\UserComment;
use App\Models\UserPost;
use App\Models\UserLogin;
use App\Models\Login;
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

        /*UserPost::factory()
            ->count(20)
            ->has(Post::factory()->count(5))
            ->create();*/

        /*UserLogin::factory()
             ->count(60)
              ->has(Login::factory()->count(500))
              ->create();*/

        $users = UserComment::factory()
            ->count(250)
            ->create();


        Feature::factory()
            ->count(60)
            ->create()
            ->each(function ($feature) use ($users) {
                $feature->comments()->createMany(
                    Comment::factory()
                        ->count(rand(1, 50))
                        ->make()
                        ->each(function ($comment) use ($users) {
                            $comment->user_id = $users->random()->id;
                        })->toArray()
                );
            });
    }
}
