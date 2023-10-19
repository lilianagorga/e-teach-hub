<?php

namespace Database\Factories;

use App\Models\Course;
use App\Models\Subject;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Course>
 */
class CourseFactory extends Factory
{
    /**
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => '',
            'seats' => $this->faker->unique()->numberBetween(1, 99),
            'subject_id' => Subject::factory(),
            'user_id' => function()
            {
                return User::factory()->create()->id;
            }
        ];
    }
}
