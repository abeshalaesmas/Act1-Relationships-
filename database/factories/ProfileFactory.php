<?php

namespace Database\Factories;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Profile>
 */
class ProfileFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $years = ['1st yr','2nd yr', '3rd yr','4th yr' ];
        return [
            'user_id' =>fake()->randomElement([1, 2, 3, 4, 5, 6, 7, 8, 9, 10]),
            'status' => $this->faker->randomElement(['active', 'inactive', 'pending']),
            'year' => $this->faker->randomElement($years),
            'country' => $this->faker->country(),
        ];
    }
}
