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
            "name" => "Название блюда ".$this->faker->randomDigit(),
            "price" => $this->faker->randomNumber(3),
            "weight" => $this->faker->randomNumber(3),
            "content" => $this->faker->text(10),
            "dish_category_id" => $this->faker->randomElement(DishCategory::all()),
        ];
    }
}
