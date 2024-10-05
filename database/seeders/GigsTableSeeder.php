<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Gig;
use App\Models\HandymanAvailability;
use Carbon\Carbon;

class GigsTableSeeder extends Seeder
{
    public function run()
    {
        // Create a sample gig manually
        $gig = Gig::create([
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
            'task_date' => '2024-10-05',
            'task_time' => '08:30:00', // Time in HH:MM:SS format
            'total' => '30',
            'status_id' => 7, // Assuming Status ID 7 is 'Open'
        ]);

        // Sync availability for the newly created gig
        $this->syncHandymanAvailability($gig);

        // Create more gigs using the factory and sync availability for each
        Gig::factory()->count(50)->create()->each(function ($gig) {
            $this->syncHandymanAvailability($gig);
        });
    }

    private function syncHandymanAvailability($gig)
    {
        // Convert task_date and task_time to a Carbon datetime object
        $startTime = Carbon::parse($gig->task_date . ' ' . $gig->task_time);

        // Calculate end time by adding the estimated time (in hours)
        $endTime = $startTime->copy()->addHours($gig->estimated_time);

        // Insert the handyman's availability based on this gig
        HandymanAvailability::create([
            'handyman_id' => $gig->handyman_id,
            'start_time' => $startTime,
            'end_time' => $endTime,
        ]);
    }
}
