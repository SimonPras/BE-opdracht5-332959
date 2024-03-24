<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Leverancier>
 */
class LeverancierFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'naam' => $this->faker->name,
            'contactPersoon' => $this->faker->name,
            'leverancierNummer' => $this->faker->randomNumber(8),
            'mobiel' => $this->faker->phoneNumber,
        ];
    }
}
