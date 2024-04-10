<?php

namespace Database\Factories;

use App\Models\Group;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Student>
 */
class StudentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $groups = Group::pluck('id')->toArray();

        return [
            'name'=>fake()->name,
            'LastName'=>fake()->lastName,
            'rating'=>fake()->numberBetween(1, 5),
            'group_id'=>fake()->randomElement($groups),
            'created_at'=> fake()->dateTimeBetween('-1 years'),
            'updated_at'=> fake()->dateTimeBetween('created_at', 'now'),
        ];
    }
}
