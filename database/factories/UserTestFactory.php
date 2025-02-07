<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\UserTest>
 */
class UserTestFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'email' => fake()->text(10),
            'fullname' => fake()->text(10),
            'sex' => fake()->text(10),
            'birthday' => fake()->text(10),
        ];
    }
}
