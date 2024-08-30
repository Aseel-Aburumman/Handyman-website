<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Ticket;

class TicketsTableSeeder extends Seeder
{
    public function run()
    {
        Ticket::create([
            'user_id' => 2, // Assuming User ID 2 exists
            'subject' => 'Issue with Power Drill',
            'description' => 'The power drill stopped working after a few uses.',
            'status_id' => 11, // Assuming Status ID 1 is 'Open'
        ]);
        // Add more tickets as needed
    }
}
