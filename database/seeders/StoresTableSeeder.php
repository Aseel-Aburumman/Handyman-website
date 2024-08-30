<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Store;

class StoresTableSeeder extends Seeder
{
    public function run()
    {
        Store::create([
            'store_owner_id' => 1, // Assuming StoreOwner ID 1 exists
            'name' => 'Handyman Tools',
            'location' => '123 Tool St',
            'description' => 'All tools needed for handymen',
            'status_id' => 4, // Assuming Status ID 4 is 'Open'
            'rating' => 4.7,
        ]);
        // Add more stores as needed
    }
}
