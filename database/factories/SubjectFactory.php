<?php

namespace Database\Factories;


use App\Models\Subject;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Subject>
 */
class SubjectFactory extends Factory
{
    /**
     *
     * @return array<string, mixed>
     */

  public function definition(?string $name = null, ?string $description = null): array
  {
    $name ??= $this->faker->word;
    $description ??= $this->faker->paragraph;
    return [
      'name' => $name,
      'description' => $description,
      'user_id' => function () {
        return User::factory()->create()->id;
      },
    ];
  }

  public function getDescription(?string $name = null): string
  {
    if ($name == "Coding") {
      return "
        Web Development is a fascinating discipline that deals with the design, development, and maintenance of web
        applications. This field plays a crucial role in creating everything we see and use online. From simple
        informative websites to complex e-commerce platforms, web development enables content to be accessible worldwide
        through the Internet. One of the primary reasons to be passionate about web development is its constant evolution.
        In the rapidly growing digital world, web technologies are constantly evolving, creating endless opportunities
        for learning and innovation.
        The opportunity to contribute to the evolution of the Internet is a compelling reason for aspiring web developers.
        Every website they create represents a new contribution to the online ecosystem, which can positively impact
        people's lives, businesses, and access to information. For instance, web application development can make
        online booking services more convenient and accessible or create e-learning platforms for distance education.
      ";
    } elseif ($name == "Yoga") {
      return "
        Yoga is an ancient practice that offers numerous benefits for both the body and the mind. While web programming
        may require long hours of mental work and focus, yoga provides an opportunity for rejuvenation. Its combination
        of postures, breathing, and meditation helps relax the mind, reduce stress, and enhance body flexibility. This
        practice can alleviate muscle tension caused by extended web development sessions and improve posture. Moreover,
        it promotes overall well-being, boosts energy levels, and enhances concentration.
        In our school, we offer two different yoga disciplines: Hatha Yoga and Ashtanga Yoga. Hatha Yoga is slower and
        aims to enhance flexibility and mental tranquility through static postures. Ashtanga Yoga is more dynamic,
        focusing on strength and breath control during movement.
      ";
    } else {
      return $this->faker->paragraph;
    }
  }
}

