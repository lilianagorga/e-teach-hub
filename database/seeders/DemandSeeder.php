<?php

namespace Database\Seeders;

use App\Models\Demand;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DemandSeeder extends Seeder
{
    public function run(): void
    {
        Demand::factory()->count(10)->create();
    }
}
