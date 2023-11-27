<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
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
            'user_id' =>random_int(1, 3), // Generate random integer using specified range 1 to 3
            'body' => fake()->words($num = 250, $asText = true),
            'created_at' => fake()->dateTimeBetween('-7 days', 'now'), // Generate date ranging anywhere from the date 7 days ago to the current time
        ];
    }
}
