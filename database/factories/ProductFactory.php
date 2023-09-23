<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => fake()->word(),
            'site' => 'velovibes',
            'price' => fake()->numberBetween(1000, 2000),
            'picture' => 'https://picsum.photos/600/400',
            'description' => fake()->paragraph(),
        ];
    }
}
