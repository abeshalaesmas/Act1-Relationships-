<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Course>
 */
class CourseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        
        $courseNames = [
            'Responsive Web Design',
            'Web Application Development',
            'Data Structures and Algorithms',
            'Physical Education 3',
            'Contemporary World',
            'Organization Management',
            'IS Infrastructure',
            'Bible Research',
        ];
        
        $sessionHours = ['1hr','2hrs', '3hrs', '4hrs', '5hrs', '6hrs'];

        return [
            'course_name' => $this->faker->randomElement($courseNames),
            'session' => $this->faker->randomElement($sessionHours),
            'grades' => $this->faker->numberBetween(80, 100),
        ];
    }
}
