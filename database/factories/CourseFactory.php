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
  protected $model = Course::class;

  /**
   * @return array<string, mixed>
   */

  public function definition(): array
  {
    return [
      'name' => $this->faker->word,
      'content' => $this->faker->paragraph,
      'seats' => $this->faker->unique()->numberBetween(1, 99),
      'subject_id' => Subject::factory(),
      'user_id' => function () {
        return User::factory()->create()->id;
      },
    ];
  }

  /**
   * @param string $subject_id
   * @param string $user_id
   * @param ?string $name
   * @param ?string $content
   * @return Factory
   */
  public function withDetails(string $subject_id, string $user_id, ?string $name = null, ?string $content = null): Factory
  {
    $name ??= $this->faker->word;
    $content ??= $this->faker->paragraph;

    return $this->state([
      'name' => $name,
      'content' => $content,
      'seats' => $this->faker->unique()->numberBetween(1, 99),
      'subject_id' => $subject_id,
      'user_id' => $user_id
    ]);
  }
}











