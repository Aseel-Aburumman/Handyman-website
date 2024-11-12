<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Sale;

class SalesTableSeeder extends Seeder
{
    public function run()
    {
        // Store 1
        Sale::create(['store_id' => 1, 'product_id' => 47, 'user_id' => 1, 'quantity_sold' => 2, 'total_amount' => 298, 'sale_date' => now(), 'status_id' => 16]);
        Sale::create(['store_id' => 1, 'product_id' => 48, 'user_id' => 2, 'quantity_sold' => 3, 'total_amount' => 450, 'sale_date' => now(), 'status_id' => 17]);
        Sale::create(['store_id' => 1, 'product_id' => 49, 'user_id' => 3, 'quantity_sold' => 1, 'total_amount' => 120, 'sale_date' => now(), 'status_id' => 18]);
        Sale::create(['store_id' => 1, 'product_id' => 50, 'user_id' => 4, 'quantity_sold' => 4, 'total_amount' => 520, 'sale_date' => now(), 'status_id' => 19]);
        Sale::create(['store_id' => 1, 'product_id' => 51, 'user_id' => 5, 'quantity_sold' => 5, 'total_amount' => 750, 'sale_date' => now(), 'status_id' => 16]);

        // Store 2
        Sale::create(['store_id' => 2, 'product_id' => 52, 'user_id' => 6, 'quantity_sold' => 2, 'total_amount' => 200, 'sale_date' => now(), 'status_id' => 17]);
        Sale::create(['store_id' => 2, 'product_id' => 53, 'user_id' => 7, 'quantity_sold' => 3, 'total_amount' => 450, 'sale_date' => now(), 'status_id' => 18]);
        Sale::create(['store_id' => 2, 'product_id' => 54, 'user_id' => 8, 'quantity_sold' => 1, 'total_amount' => 120, 'sale_date' => now(), 'status_id' => 19]);
        Sale::create(['store_id' => 2, 'product_id' => 55, 'user_id' => 9, 'quantity_sold' => 4, 'total_amount' => 520, 'sale_date' => now(), 'status_id' => 16]);
        Sale::create(['store_id' => 2, 'product_id' => 56, 'user_id' => 10, 'quantity_sold' => 5, 'total_amount' => 750, 'sale_date' => now(), 'status_id' => 17]);

        // Store 3
        Sale::create(['store_id' => 3, 'product_id' => 57, 'user_id' => 11, 'quantity_sold' => 2, 'total_amount' => 200, 'sale_date' => now(), 'status_id' => 18]);
        Sale::create(['store_id' => 3, 'product_id' => 58, 'user_id' => 12, 'quantity_sold' => 3, 'total_amount' => 450, 'sale_date' => now(), 'status_id' => 19]);
        Sale::create(['store_id' => 3, 'product_id' => 59, 'user_id' => 13, 'quantity_sold' => 1, 'total_amount' => 120, 'sale_date' => now(), 'status_id' => 16]);
        Sale::create(['store_id' => 3, 'product_id' => 60, 'user_id' => 14, 'quantity_sold' => 4, 'total_amount' => 520, 'sale_date' => now(), 'status_id' => 17]);
        Sale::create(['store_id' => 3, 'product_id' => 61, 'user_id' => 15, 'quantity_sold' => 5, 'total_amount' => 750, 'sale_date' => now(), 'status_id' => 18]);

        // Store 4
        Sale::create(['store_id' => 4, 'product_id' => 62, 'user_id' => 16, 'quantity_sold' => 2, 'total_amount' => 200, 'sale_date' => now(), 'status_id' => 19]);
        Sale::create(['store_id' => 4, 'product_id' => 63, 'user_id' => 17, 'quantity_sold' => 3, 'total_amount' => 450, 'sale_date' => now(), 'status_id' => 16]);
        Sale::create(['store_id' => 4, 'product_id' => 64, 'user_id' => 18, 'quantity_sold' => 1, 'total_amount' => 120, 'sale_date' => now(), 'status_id' => 17]);
        Sale::create(['store_id' => 4, 'product_id' => 65, 'user_id' => 19, 'quantity_sold' => 4, 'total_amount' => 520, 'sale_date' => now(), 'status_id' => 18]);
        Sale::create(['store_id' => 4, 'product_id' => 66, 'user_id' => 20, 'quantity_sold' => 5, 'total_amount' => 750, 'sale_date' => now(), 'status_id' => 19]);

        // Store 5
        Sale::create(['store_id' => 5, 'product_id' => 67, 'user_id' => 21, 'quantity_sold' => 2, 'total_amount' => 200, 'sale_date' => now(), 'status_id' => 16]);
        Sale::create(['store_id' => 5, 'product_id' => 68, 'user_id' => 22, 'quantity_sold' => 3, 'total_amount' => 450, 'sale_date' => now(), 'status_id' => 17]);
        Sale::create(['store_id' => 5, 'product_id' => 69, 'user_id' => 23, 'quantity_sold' => 1, 'total_amount' => 120, 'sale_date' => now(), 'status_id' => 18]);
        Sale::create(['store_id' => 5, 'product_id' => 70, 'user_id' => 24, 'quantity_sold' => 4, 'total_amount' => 520, 'sale_date' => now(), 'status_id' => 19]);
        Sale::create(['store_id' => 5, 'product_id' => 71, 'user_id' => 25, 'quantity_sold' => 5, 'total_amount' => 750, 'sale_date' => now(), 'status_id' => 16]);

        // Store 6
        Sale::create(['store_id' => 6, 'product_id' => 72, 'user_id' => 26, 'quantity_sold' => 2, 'total_amount' => 200, 'sale_date' => now(), 'status_id' => 17]);
        Sale::create(['store_id' => 6, 'product_id' => 73, 'user_id' => 27, 'quantity_sold' => 3, 'total_amount' => 450, 'sale_date' => now(), 'status_id' => 18]);
        Sale::create(['store_id' => 6, 'product_id' => 74, 'user_id' => 28, 'quantity_sold' => 1, 'total_amount' => 120, 'sale_date' => now(), 'status_id' => 19]);
        Sale::create(['store_id' => 6, 'product_id' => 75, 'user_id' => 1, 'quantity_sold' => 4, 'total_amount' => 520, 'sale_date' => now(), 'status_id' => 16]);
        Sale::create(['store_id' => 6, 'product_id' => 76, 'user_id' => 2, 'quantity_sold' => 5, 'total_amount' => 750, 'sale_date' => now(), 'status_id' => 17]);

        // Store 7
        Sale::create(['store_id' => 7, 'product_id' => 77, 'user_id' => 3, 'quantity_sold' => 2, 'total_amount' => 200, 'sale_date' => now(), 'status_id' => 18]);
        Sale::create(['store_id' => 7, 'product_id' => 78, 'user_id' => 4, 'quantity_sold' => 3, 'total_amount' => 450, 'sale_date' => now(), 'status_id' => 19]);
        Sale::create(['store_id' => 7, 'product_id' => 79, 'user_id' => 5, 'quantity_sold' => 1, 'total_amount' => 120, 'sale_date' => now(), 'status_id' => 16]);
        Sale::create(['store_id' => 7, 'product_id' => 80, 'user_id' => 6, 'quantity_sold' => 4, 'total_amount' => 520, 'sale_date' => now(), 'status_id' => 17]);
        Sale::create(['store_id' => 7, 'product_id' => 81, 'user_id' => 7, 'quantity_sold' => 5, 'total_amount' => 750, 'sale_date' => now(), 'status_id' => 18]);

        // Store 8
        Sale::create(['store_id' => 8, 'product_id' => 82, 'user_id' => 8, 'quantity_sold' => 2, 'total_amount' => 200, 'sale_date' => now(), 'status_id' => 19]);
        Sale::create(['store_id' => 8, 'product_id' => 83, 'user_id' => 9, 'quantity_sold' => 3, 'total_amount' => 450, 'sale_date' => now(), 'status_id' => 16]);
        Sale::create(['store_id' => 8, 'product_id' => 84, 'user_id' => 10, 'quantity_sold' => 1, 'total_amount' => 120, 'sale_date' => now(), 'status_id' => 17]);
        Sale::create(['store_id' => 8, 'product_id' => 85, 'user_id' => 11, 'quantity_sold' => 4, 'total_amount' => 520, 'sale_date' => now(), 'status_id' => 18]);
        Sale::create(['store_id' => 8, 'product_id' => 86, 'user_id' => 12, 'quantity_sold' => 5, 'total_amount' => 750, 'sale_date' => now(), 'status_id' => 19]);




        Sale::factory()->count(60)->create();
    }
}
