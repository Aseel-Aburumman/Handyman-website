<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Handyman;

class HandymansTableSeeder extends Seeder
{
    public function run()
    {
        Handyman::create([
            'user_id' => 3, // Assuming User ID 3 is a handyman
            'experience' => 5,
            'store_location' => '123 Main St',
            'bio' => 'Experienced handyman available for all sorts of tasks.',
        ]);

        // Add more handymen as needed
        // Handyman::factory(5)->create(); // Creates 5 dummy handymen
    }
}
