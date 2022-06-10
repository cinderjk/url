<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Url>
 */
class UrlFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'user_id' => $this->faker->numberBetween(1, 2),
            'hash' => $this->faker->unique()->regexify('[A-Z]{1}[a-z]{1}[A-Z]{1}[a-z]{1}[0-9]{1}[A-Z]{1}[a-z]{1}[0-9]{1}'),
            'original_url' => $this->faker->url,
            'expires_at' => now()->addDays(rand(1, 10)),
            'created_at' => now()->subDays(rand(10, 30)),
        ];
    }
}
