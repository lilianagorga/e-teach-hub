<?php

namespace Database\Seeders;

use App\Models\Subject;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Database\Factories\SubjectFactory;

class SubjectSeeder extends Seeder
{
  public function run(): void
  {
    Subject::factory()->count(20)->create();
  }
}

