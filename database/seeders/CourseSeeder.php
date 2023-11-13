<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Subject;
use Illuminate\Database\Seeder;
use Database\Factories\CourseFactory;
use Database\Factories\SubjectFactory;

class CourseSeeder extends Seeder
{
    public function run(): void
    {
      $user = User::factory()->create();

      $subjectFactory = new SubjectFactory();
      $codingSubject = $subjectFactory->getOrCreateSubject('Coding', $subjectFactory->getDescription('Coding'), $user->id);
      $yogaSubject = $subjectFactory->getOrCreateSubject('Yoga', $subjectFactory->getDescription('Yoga'), $user->id);

      CourseFactory::new()->withDetails($codingSubject['id'], $user->id, "Frontend", $this->getContent('Frontend'))->create();
      CourseFactory::new()->withDetails($codingSubject['id'], $user->id, "Backend", $this->getContent('Backend'))->create();
      CourseFactory::new()->withDetails($yogaSubject['id'], $user->id, "Hatha Yoga", $this->getContent('Hatha Yoga'))->create();
      CourseFactory::new()->withDetails($yogaSubject['id'], $user->id, "Ashtanga Yoga", $this->getContent('Ashtanga Yoga'))->create();

      for ($i = 0; $i < 18; $i++) {
        $subject = Subject::factory()->create(['user_id' => $user->id]);
        CourseFactory::new()->withDetails($subject->id, $user->id)->create();
      }
    }

    public function getContent(?string $name = null): string | null
    {
      if ($name == "Frontend") {
        return "
          Frontend is the visible part of an application or website with which users directly interact. It's responsible
          for the look and behavior of the user interface, including web pages, buttons, menus, and forms. Frontend
          involves the use of technologies like HTML, CSS, and JavaScript to create appealing and interactive layouts.
          Frontend developers work to enhance user experience, optimizing navigation and ensuring smooth functionality.
          It's a continuously evolving field with ever-new technologies and trends to explore.
        ";
      } elseif ($name == "Backend") {
        return "
          The 'backend' is the brain behind a web application. It's the invisible part that handles data, processing
          and system logic. Backend developers create and maintain servers, databases, and server-side applications that
          power the entire website. They work with programming languages like Python, Ruby, PHP, and JavaScript to create
          APIs and web services that provide data to the frontend. Without a robust backend, the frontend wouldn't function.
          Backend developers play a crucial role in ensuring that an application is secure, fast, and efficient. It's a
          growing field with an increasing demand for skilled professionals.
        ";
      } elseif ($name == "Hatha Yoga") {
        return "
          Hatha yoga is one of the most popular branches of yoga, focusing on physical postures (asana) and breathing
          (pranayama). This practice helps improve strength, flexibility, and relax the mind. It's ideal for those
          seeking a path to balance between body and spirit through the connection between breath and movement.
        ";
      } elseif ($name == "Ashtanga Yoga") {
        return "
          Ashtanga yoga is a dynamic and rigorous style that involves a specific sequence of postures and breathing.
          This practice aims to improve strength, endurance, and concentration. It's ideal for those seeking a
          challenging physical routine and moving meditation for mental and physical harmony.
        ";
      } else {
        return null;
      }
    }
}
