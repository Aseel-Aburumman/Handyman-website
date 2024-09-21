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
        Certificate::create(['name' => 'Hardware Certification', 'description' => 'Certified Hardware Work']);
        Certificate::create(['name' => 'Garden Tools Certification', 'description' => 'Certified Garden Tools Work']);
        Certificate::create(['name' => 'Supplies Certification', 'description' => 'Certified Supplies Work']);
        Certificate::create(['name' => 'Gear Certification', 'description' => 'Certified Gear Work']);
        Certificate::create(['name' => 'DIY Certification', 'description' => 'Certified DIY Work']);
        Certificate::create(['name' => 'Paint Certification', 'description' => 'Certified Paint Work']);
        Certificate::create(['name' => 'Parts Certification', 'description' => 'Certified Parts Work']);
        Certificate::create(['name' => 'Kitchenware Certification', 'description' => 'Certified Kitchenware Work']);
        Certificate::create(['name' => 'Supplies Certification', 'description' => 'Certified Supplies Work']);
        Certificate::create(['name' => 'Plumbing Certification', 'description' => 'Certified Plumbing Work']);



        // Add more certificates as needed

        // Certificate::factory(10)->create();
    }
}
