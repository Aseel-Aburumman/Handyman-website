<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\StoreOwnerApplication;

class StoreOwnerApplicationsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {


        StoreOwnerApplication::create([
            'user_id' => 2,
            'certificate_id' => 13,
            'store_name' => 'test',
            'store_name_ar' => 'تست',
            'contact_number' => '555-6258',
            'address' => 'test test test test',
            'address_ar' => 'تست تست تست تست ',
            'location' => 'test',
            'description' => 'test test test test test test test test',
            'description_ar' => ' تست تست تست  تست تست تست',
            'status' => 'pending',
        ]);

        StoreOwnerApplication::create([
            'user_id' => 2,
            'certificate_id' => 13,
            'store_name' => 'test',
            'store_name_ar' => '55555555555555555تست',
            'contact_number' => '555-6258',
            'address' => 'test test test test',
            'address_ar' => 'تست تست تست تست ',
            'location' => 'test',
            'description' => 'test test test test test test test test',
            'description_ar' => ' تست تست تست  تست تست تست',
            'status' => 'pending',
        ]);
    }
}
