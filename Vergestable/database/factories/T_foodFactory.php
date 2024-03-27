<?php

namespace Database\Factories;
use App\Models\Category;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\T_food>
 */
class T_foodFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "name" => $this->faker->text(10),
            "images" => "vergestable" . $this->faker->numberBetween(1, 3) . ".jpg",
            "currentPrice" => $this->faker->randomFloat(2, 1, 100), // Generates a random float between 1 and 100 with 2 decimal places
            "amountPrice" => $this->faker->randomFloat(2, 10, 1000), // Generates a random float between 10 and 1000 with 2 decimal places
            "created_at" => $this->faker->dateTime(),
            "updated_at" => $this->faker->dateTime(),
            "describles" => $this->faker->text(255),
            "category_id" => Category::pluck('id')->random(),
        ];
    }
}
