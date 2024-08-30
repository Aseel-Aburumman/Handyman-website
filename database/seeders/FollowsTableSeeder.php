<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Follow;

class FollowsTableSeeder extends Seeder
{
    public function run()
    {
        Follow::create([
            'follower_id' => 2, // Assuming User ID 2 exists
            'followed_id' => 1, // Assuming User ID 1 exists
            'follow_type' => 'handyman',
        ]);
        // Add more follows as needed
    }
}
