<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Group>
 */
class GroupFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->sentence(3),
            'speciality_id' => fake()->numberBetween(1, 10),
            'created_at'=> fake()->dateTimeBetween('-1 years'),
            'updated_at'=> fake()->dateTimeBetween('created_at', 'now'),
        ];
    }
}
