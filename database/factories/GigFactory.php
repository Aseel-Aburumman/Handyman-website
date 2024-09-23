<?php

namespace Database\Factories;

use App\Models\Gig;
use Illuminate\Database\Eloquent\Factories\Factory;

class GigFactory extends Factory
{
    protected $model = Gig::class;

    public function definition()
    {
        return [
            'user_id' => $this->faker->numberBetween(6, 22), // Random User ID between 6 and 22
            'handyman_id' => $this->faker->numberBetween(3, 8), // Random Handyman ID between 3 and 8
            'category_id' => 1, // Assuming Category ID 1 exists
            'skill_id' => 1, // Assuming Skill ID 1 exists
            'service_id' => 1, // Assuming Service ID 1 exists
            'title' => $this->faker->sentence(), // Random title for the gig
            'description' => $this->faker->paragraph(), // Random description for the gig
            'location' => $this->faker->address(), // Random location
            'estimated_time' => $this->faker->numberBetween(1, 8), // Estimated time in hours (random between 1 and 8)
            'price' => $this->faker->numberBetween(20, 500), // Random price between $20 and $500
            'status_id' => 7, // Assuming Status ID 7 is 'Open'
        ];
    }
}
