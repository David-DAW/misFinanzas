<?php

namespace Database\Factories;
use App\Models\Category;


use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class IncomeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'date' => fake()->date(),
            'amount' => fake()->randomfloat(2, 0, 4000),
            'id_category' => Category::inRandomOrder()->first()->id,
        ];
    }
}

