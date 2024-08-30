<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategoriesTableSeeder extends Seeder
{
    public function run()
    {
        Category::create(['name' => 'Assembly', 'description' => 'Assembly services']);
        Category::create(['name' => 'Mounting', 'description' => 'Mounting services']);
        Category::create(['name' => 'Moving', 'description' => 'Moving services']);
        Category::create(['name' => 'Cleaning', 'description' => 'Cleaning services']);
        Category::create(['name' => 'Outdoor Help', 'description' => 'Outdoor help services']);
        Category::create(['name' => 'Home Repairs', 'description' => 'Home repair services']);
        Category::create(['name' => 'Painting', 'description' => 'Painting services']);
    }
}
