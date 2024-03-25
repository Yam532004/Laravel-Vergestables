<?php

namespace Database\Factories;
use App\Models\Vergestable;
use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Generator as Faker;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Vergestable>
 */
class VergestableFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->name,
            'count' => $this->faker->numberBetween(1, 100), // Sử dụng numberBetween để tạo số ngẫu nhiên trong khoảng từ 1 đến 100
            'price' => $this->faker->randomFloat(2, 10, 100), // Sử dụng randomFloat để tạo số ngẫu nhiên với 2 chữ số thập phân, trong khoảng từ 10 đến 100
            "images" => "vergestable".($this->faker->numberBetween(1, 3)).".jpg",
        ];
    }
}
