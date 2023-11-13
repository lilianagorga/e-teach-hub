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

  private array $subjectCache = [];

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
      'user_id' => function()
      {
          return User::factory()->create()->id;
      }
    ];
  }

  /**
   * @param ?string $name
   * @param ?string $content
   * @return Factory
   */
  public function withDetails(?string $name = null, ?string $content = null): Factory
  {
    $name ??= $this->faker->word;
    $content ??= $this->faker->paragraph;
//    $courseToSubjectMapping = [
//      'Frontend' => 'Coding',
//      'Backend' => 'Coding',
//      'Hatha Yoga' => 'Yoga',
//      'Ashtanga Yoga' => 'Yoga',
//    ];
//
//    $subject = Subject::where('name', $name)->first();
//
//    if (!$subject) {
//      $subjectToSubjectMapping = [
//        'Frontend' => 'Coding',
//        'Backend' => 'Coding',
//        'Hatha Yoga' => 'Yoga',
//        'Ashtanga Yoga' => 'Yoga',
//      ];
//      $subjectName = $subjectToSubjectMapping[$name] ?? $this->faker->word;
//      $subjectFactory = new SubjectFactory();
//      $description = $subjectFactory->getDescription($subjectName);
//
//      $subject = Subject::factory()->create([
//        'name' => $subjectName,
//        'description' => $description,
//      ]);
//    }

    $subjectName = $this->getSubjectName($name);
    $subjectFactory = new SubjectFactory();
    $description = $subjectFactory->getDescription($subjectName);

    if (!array_key_exists($subjectName, $this->subjectCache)) {
      $subject = Subject::where('name', $subjectName)->first();

      if (!$subject) {
        $this->subjectCache[$subjectName] = [
          'id' => Subject::factory()->create([
          'name' => $subjectName,
          'description' => $description,
          ])
        ];
      } else {
        $this->subjectCache[$subjectName] = [
          'id' => $subject->id,
          'description' => $subject->description,
        ];
      }
    }

    return $this->state([
      'name' => $name,
      'content' => $content,
      'seats' => $this->faker->unique()->numberBetween(1, 99),
//      'subject_id' => $subject->id,
      'subject_id' => $this->subjectCache[$subjectName]['id'],
      'user_id' => function()
      {
        return User::factory()->create()->id;
      }
    ]);
  }

  public function getSubjectName(?string $courseName): string | null {
    if ($courseName == "Frontend" || $courseName == "Backend") {
      return "Coding";
    } else if ($courseName == "Hatha Yoga" || $courseName == "Ashtanga Yoga") {
      return "Yoga";
    } else {
      return null;
    }
  }
}

