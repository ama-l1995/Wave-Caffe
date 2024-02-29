<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Beverage>
 */
class BeverageFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            // 'Beverage_Date' => fake()->date(),
            'Title' => fake()->Title(),
            'Content' => fake()->text(),
            'Price' => fake()->randomNumber(5, false),
            'Published' => fake()->boolean(),
            'Special' => fake()->boolean(),
            'image' => fake()->imageUrl(800,600),
            'category_id' => fake()->numberBetween($min = 1, $max = 2),
            ];
    }
}
