<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Certificate;

class CertificatesTableSeeder extends Seeder
{
    public function run()
    {
        Certificate::create(['name' => 'Plumbing License', 'description' => 'Certified Plumbing License']);
        Certificate::create(['name' => 'Electrical Certification', 'description' => 'Certified Electrical Work']);
        // Add more certificates as needed

        // Certificate::factory(10)->create();
    }
}
