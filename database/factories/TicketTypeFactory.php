<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\TicketType>
 */
class TicketTypeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'event_id' => 1,
            'title' => $this->faker->randomElement(['Básico', 'Medio', 'Platino']),
            'description' => $this->faker->sentence(15),
            'price' => $this->faker->randomElement([100.00, 200.00, 300.00, 500.00]),
        ];
    }
}