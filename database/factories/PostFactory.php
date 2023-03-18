<?php

namespace Database\Factories;

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
        return [
            "title" => $this->faker->name(),
            "preview" => $this->faker->text(),
            "description" => $this->faker->text(),
            "photo" => $this->faker->image("public/storage/posts", width: 640, height: 520, category: null, fullPath: false),
            "organization" => $this->faker->text(),
        ];
    }
}
