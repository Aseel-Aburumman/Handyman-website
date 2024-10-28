<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\HandymanApplication;

class HandymanApplicationsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        HandymanApplication::create([
            'user_id' => 2,
            'price_per_hour' => 10,
            'experience' => 5,
            'bio' => '5 years of experience in home repair and plumbing work.',
            'status' => 'pending',
        ]);

        HandymanApplication::create([
            'user_id' => 2,
            'price_per_hour' => 15,
            'experience' => 15,
            'bio' => '5 years of experience in home repair and plumbing work.',
            'status' => 'pending',
        ]);
    }
}
