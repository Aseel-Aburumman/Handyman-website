<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\StoreOwner;

class StoreOwnersTableSeeder extends Seeder
{
    public function run()
    {
        StoreOwner::create([
            'user_id' => 4, // Assuming User ID 2 is a store owner
            'store_name' => 'Tool Emporium',
            'contact_number' => '555-1234',
            'address' => '456 Store Blvd',
            'rating' => 4.5,
            'certificate_id' => 2, // Assuming Certificate ID 1 exists
        ]);
        // Add more store owners as needed
    }
}
