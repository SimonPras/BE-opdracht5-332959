<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Magazijn>
 */
class MagazijnFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'product_id' => $this->faker->numberBetween(1, 10),
            'verpakkingsEenheid' => $this->faker->randomNumber(2),
            'aantalAanwezig' => $this->faker->randomNumber(2),
        ];
    }
}
