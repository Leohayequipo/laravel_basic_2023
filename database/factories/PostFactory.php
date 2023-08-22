<?php

namespace Database\Factories;
use illuminate\Support\Str;

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
            'user_id' => $this->faker->numberBetween(1,9),
            'title'   => $title= $this->faker->sentence(),
            'slug'    => Str::slug($title),
            'body'    => $this->faker->text(2200),

        ];
    }
}
