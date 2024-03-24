<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ProductPerLeverancier>
 */
class ProductPerLeverancierFactory extends Factory
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
            'leverancier_id' => $this->faker->numberBetween(1, 10),
            'datumLevering' => $this->faker->date(),
            'aantal' => $this->faker->randomNumber(2),
            'datumEerstVolgendeLevering' => $this->faker->date(),
        ];
    }
}
