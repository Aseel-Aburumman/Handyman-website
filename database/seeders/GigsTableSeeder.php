<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Gig;

class GigsTableSeeder extends Seeder
{
    public function run()
    {
        Gig::create([
            'user_id' => 2, // Assuming User ID 2 exists
            'handyman_id' => 1, // Assuming Handyman ID 1 exists
            'category_id' => 1, // Assuming Category ID 1 exists
            'skill_id' => 1, // Assuming Skill ID 1 exists
            'service_id' => 1, // Assuming Service ID 1 exists
            'title' => 'Fix leaky faucet',
            'description' => 'Need a handyman to fix a leaky faucet in the kitchen.',
            'location' => '123 Main St',
            'estimated_time' => 2, // 2 hours
            'price' => 50, // $50
            'status_id' => 7, // Assuming Status ID 1 is 'Open'
        ]);
        // Add more gigs as needed
        Gig::factory()->count(50)->create();

    }
}
