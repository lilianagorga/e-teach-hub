<?php

namespace Database\Factories;

use App\Models\Demand;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Demand>
 */
class DemandFactory extends Factory
{
    /**
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => ucfirst($this->faker->word),
            'user_id' => function()
            {
                return User::factory()->create()->id;
            }
        ];
    }
}
