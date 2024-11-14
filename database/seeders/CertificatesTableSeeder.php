<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Certificate;

class CertificatesTableSeeder extends Seeder
{
    public function run()
    {
        Certificate::create(['name' => 'PlumbingLicense.webp', 'description' => 'Certified Plumbing License']);
        Certificate::create(['name' => 'ElectricalCertification.webp', 'description' => 'Certified Electrical Work']);
        Certificate::create(['name' => 'HardwareCertification.webp', 'description' => 'Certified Hardware Work']);
        Certificate::create(['name' => 'GardenToolsCertification.webp', 'description' => 'Certified Garden Tools Work']);
        Certificate::create(['name' => 'SuppliesCertification.webp', 'description' => 'Certified Supplies Work']);
        Certificate::create(['name' => 'GearCertification.webp', 'description' => 'Certified Gear Work']);
        Certificate::create(['name' => 'DIYCertification.webp', 'description' => 'Certified DIY Work']);
        Certificate::create(['name' => 'PaintCertification.webp', 'description' => 'Certified Paint Work']);
        Certificate::create(['name' => 'PartsCertification.webp', 'description' => 'Certified Parts Work']);
        Certificate::create(['name' => 'KitchenwareCertification.webp', 'description' => 'Certified Kitchenware Work']);
        Certificate::create(['name' => 'SuppliesCertification.webp', 'description' => 'Certified Supplies Work']);
        Certificate::create(['name' => 'PlumbingCertification.webp', 'description' => 'Certified Plumbing Work']);
        Certificate::create(['name' => 'storecertification.webp', 'description' => 'Certified store Work']);
        Certificate::create(['name' => 'certification.webp', 'description' => 'Certified  Work']);
    }
}
