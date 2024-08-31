<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Sale;

class SalesTableSeeder extends Seeder
{
    public function run()
    {
        Sale::create([
            'store_id' => 1, // Assuming Store ID 1 exists
            'product_id' => 1, // Assuming Product ID 1 exists
            'user_id' => 2, // Assuming User ID 2 exists
            'quantity_sold' => 2,
            'total_amount' => 298, // 2 * 149
            'sale_date' => now(),
            'status_id' => 15, //  15 is 'Pending',16 is 'Confirmed',17 is 'Delivered',18 is 'Canceled'
        ]);
        Sale::factory()->count(50)->create();
    }
}
