<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\GigPolicy;

class GigPolicySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        GigPolicy::create([

            'content' => 'This is the default gig policy. It outlines the terms and conditions for all gig transactions on our platform. Please ensure that both handymen and customers comply with the policy to ensure smooth operations and avoid disputes.',
            'visible' => true,
        ]);

        GigPolicy::create([

            'content' => 'This is the 2nd default gig policy. It outlines the terms and conditions for all gig transactions on our platform. Please ensure that both handymen and customers comply with the policy to ensure smooth operations and avoid disputes.',
            'visible' => true,
        ]);

        GigPolicy::create([

            'content' => 'This is the 3rd default gig policy. It outlines the terms and conditions for all gig transactions on our platform. Please ensure that both handymen and customers comply with the policy to ensure smooth operations and avoid disputes.',
            'visible' => false,
        ]);
    }
}
