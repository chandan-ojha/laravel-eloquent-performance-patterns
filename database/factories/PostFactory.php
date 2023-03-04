<?php

namespace Database\Factories;

use App\Models\Post;
use Faker\Generator as Faker;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $title = substr($this->faker->sentence, 0, -1);

        return [
            'title' => $title,
            'slug' => Str::slug($title),
            'body' => $this->faker->paragraphs(500, true),
            'published_at' => $this->faker->dateTimeThisDecade(),
        ];
    }
}
