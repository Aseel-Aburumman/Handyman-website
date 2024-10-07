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
            'description' => 'This is a durable and essential piece of safety gear designed to protect workers from head injuries on construction sites. Made from high-quality, impact-resistant plastic, it provides excellent protection against falling debris and other hazards. The helmet features an adjustable strap for a secure and comfortable fit and ensuring it stays in place during rigorous activities..',
            'description_ar' => 'مثقاب كهربائي عالي الجودة لجميع احتياجات الأعمال اليدوية.',
            'price' => 19,
            'discounted_price' => 10,
            'availability' => true,
            'stock_quantity' => 50,
        ]);

        // Add more products as needed
        Product::factory()->count(50)->create();
    }
}
