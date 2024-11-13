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

     protected static $courseNames = [
        'Responsive Web Design',
        'Web Application Development',
        'Data Structures and Algorithms',
        'Physical Education 3',
        'Contemporary World',
        'Organization Management',
        'IS Infrastructure',
        'Bible Research',
        'National Training Service',
        'Computer Programming 3',
    ];
    public function definition(): array
    {
        
        // Ensure no repetition by picking and removing a course name
        $courseName = $this->faker->randomElement(static::$courseNames);

        // Remove the used course name to avoid repetition
        static::$courseNames = array_diff(static::$courseNames, [$courseName]);

        $sessionHours = ['1hr', '2hrs', '3hrs', '4hrs', '5hrs', '6hrs'];

        return [
            'course_name' => $courseName,
            'session' => $this->faker->randomElement($sessionHours),
        ]; 
    }
}
