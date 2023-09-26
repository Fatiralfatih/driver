<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Vehicle>
 */

    

class VehicleFactory extends Factory
{   
    public function definition(): array
    {
        return [
            'category_id' => mt_rand(1,3),
            'user_id' => User::factory(),
            'slug' => fake()->slug(),
            'title' => fake()->sentence(),
            'body' => fake()->paragraph(),
            'name_vehicle' => fake()->word(),
        ];
    }
}
