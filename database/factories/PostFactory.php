<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

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
        return [
            'title' => fake()->sentence(rand(1, 5)),
            'category_id' => rand(1,2),
            'slug' => fake()->slug(),
            'narasumber' => fake()->name(),
            'date' => fake()->date(),
            'description' => fake()->paragraph(rand(10, 50)),
            'short_description' => Str::limit(fake()->paragraph(rand(10, 50)), 200),
        ];
    }
}
