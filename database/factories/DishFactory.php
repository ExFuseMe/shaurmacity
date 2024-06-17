<?php

namespace Database\Factories;

use App\Models\DishCategory;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Dish>
 */
class DishFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "name" => $this->faker->name,
            "price" => $this->faker->randomNumber(3),
            "category_id" => $this->faker->randomElement(DishCategory::all()),
        ];
    }
}
