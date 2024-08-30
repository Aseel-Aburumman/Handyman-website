<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ShoppingCart;

class ShoppingCartsTableSeeder extends Seeder
{
    public function run()
    {
        ShoppingCart::create([
            'store_id' => 1, // Assuming Store ID 1 exists
            'user_id' => 2, // Assuming User ID 2 exists
            'product_id' => 1, // Assuming Product ID 1 exists
            'quantity' => 2,
        ]);

        // ShoppingCart::create([
        //     'store_id' => 1, // Assuming Store ID 1 exists
        //     'user_id' => 2, // Assuming User ID 2 exists
        //     'product_id' => 2, // Assuming Product ID 1 exists
        //     'quantity' => 3,
        // ]);

        // ShoppingCart::create([
        //     'store_id' => 1, // Assuming Store ID 1 exists
        //     'user_id' => 2, // Assuming User ID 2 exists
        //     'product_id' => 3, // Assuming Product ID 1 exists
        //     'quantity' => 1,
        // ]);

        // ShoppingCart::create([
        //     'store_id' => 1, // Assuming Store ID 1 exists
        //     'user_id' => 2, // Assuming User ID 2 exists
        //     'product_id' => 4, // Assuming Product ID 1 exists
        //     'quantity' => 2,
        // ]);
        // Add more shopping cart entries as needed
    }
}
