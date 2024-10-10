<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Payment;

class PaymentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Payment::create([
            'handyman_id' => 1,
            'gig_id' => 1,
            'amount' => 10,
            'description' => 'extra paint work for one hour',
            'status_id' => 25
        ]);

        Payment::create([
            'handyman_id' => 1,
            'gig_id' => 1,
            'amount' => 20,
            'description' => 'extra paint work for one hour',
            'status_id' => 26
        ]);

        Payment::create([
            'handyman_id' => 1,
            'gig_id' => 1,
            'amount' => 50,
            'description' => 'extra paint work for one hour',
            'status_id' => 27
        ]);
    }
}
