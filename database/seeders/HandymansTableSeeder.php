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
            'suspended' => false,
            'bio' => 'Experienced handyman available for all sorts of tasks.',
        ]);

        Handyman::create([
            'user_id' => 5, // Assuming User ID 3 is a handyman
            'experience' => 3,
            'store_location' => '1 Main St',
            'suspended' => true,
            'bio' => 'Experienced handyman available for all sorts of tasks.',
        ]);

        Handyman::create([
            'user_id' => 23, //23 to 28 
            'experience' =>  1,
            'store_location' => ' ',
            'suspended' => false,
            'bio' => 'Skilled handyman with extensive experience, ready to assist with a wide range of tasks.',
        ]);

        Handyman::create([
            'user_id' => 24, //23 to 28 
            'experience' =>  2,
            'store_location' => ' ',
            'suspended' => false,
            'bio' => 'Reliable handyman offering expertise in various tasks, available for immediate assistance. ',
        ]);

        Handyman::create([
            'user_id' => 25, //23 to 28 
            'experience' =>  5,
            'store_location' => ' ',
            'suspended' => false,
            'bio' => 'Experienced professional handyman available to handle all types of home maintenance',
        ]);

        Handyman::create([
            'user_id' => 26, //23 to 28 
            'experience' =>  1,
            'store_location' => ' ',
            'suspended' => false,
            'bio' => 'Dedicated handyman with years of experience, available to assist with any type of task, big or small.',
        ]);

        Handyman::create([
            'user_id' => 27, //23 to 28 
            'experience' =>  4,
            'store_location' => ' ',
            'suspended' => false,
            'bio' => 'Proficient handyman at your service, available to tackle an array of maintenance and repair tasks.',
        ]);

        Handyman::create([
            'user_id' => 28, //23 to 28 
            'experience' =>  3,
            'store_location' => ' ',
            'suspended' => false,
            'bio' => 'Versatile handyman with a wealth of experience, prepared to take on any household or repair job.',
        ]);
        // Add more handymen as needed
        // Handyman::factory(5)->create(); // Creates 5 dummy handymen
    }
}
