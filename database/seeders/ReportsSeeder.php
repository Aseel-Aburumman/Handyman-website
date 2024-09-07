<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Report;


class ReportsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Report::create([
            'user_id' => 2, // Assuming User ID 2 exists
            'handyman_id' => 1, // Assuming Handyman ID 1 exists
            'message' => 'bad service, bad comminication!',
        ]);

        Report::create([
            'user_id' => 2,
            'gig_id' => 1,
            'message' => 'TOS Violation!',
        ]);

        Report::create([
            'user_id' => 2, // Assuming User ID 2 exists
            'store_id' => 1, // Assuming Handyman ID 1 exists
            'message' => 'bad service, bad comminication!',
        ]);
    }
}
