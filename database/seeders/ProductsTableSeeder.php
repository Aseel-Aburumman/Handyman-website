<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductsTableSeeder extends Seeder
{
    public function run()
    {
        Product::create([
            'store_id' => 1, // Assuming Store ID 1 exists
            'name' => 'Power Drill',
            'name_ar' => 'مثقاب كهربائي',
            'rating' => 4.8,
            'description' => 'High-quality power drill for all your DIY needs.',
            'description_ar' => 'مثقاب كهربائي عالي الجودة لجميع احتياجات الأعمال اليدوية.',
            'price' => 149,
            'availability' => true,
            'stock_quantity' => 50,
        ]);

        // Add more products as needed
        Product::factory()->count(50)->create();
    }
}
