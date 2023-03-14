<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Event>
 */
class EventFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence(5),
            'description' => $this->faker->sentence(20),
            'date' => $this->faker->dateTimeBetween('+1 week', '+52 week'),
            'public_at' => $this->faker->dateTime(),
            'main_image' => $this->faker->randomElement([
                'events/poster-1.jpg',
                'events/poster-2.jpg',
                'events/poster-3.jpg',
                'events/poster-4.jpg',
                'events/poster-5.jpg',
                'events/poster-6.jpg',
                'events/poster-7.jpg',
                'events/poster-8.jpg',
                'events/poster-9.jpg',
                'events/poster-10.jpg',
                'events/poster-11.jpg',
                'events/poster-12.jpg',
            ]),
            'location' => $this->faker->sentence(8),
            'address' => $this->faker->sentence(4),
            'country' => $this->faker->country(),
            'state' => $this->faker->word(),
            'city' => $this->faker->city(),
            'post_code' => $this->faker->postcode(),
            'created_by' => 1
        ];
    }
}