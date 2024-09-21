<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategoriesTableSeeder extends Seeder
{
    public function run()
    {
        Category::create(['name' => 'Assembly', 'name_ar' => 'التجميع',  'description_ar' => 'خدمات التجميع', 'description' => 'Assembly services']);
        Category::create(['name' => 'Mounting',  'name_ar' => 'التثبيت', 'description_ar' => 'خدمات التثبيت', 'description' => 'Mounting services']);
        Category::create(['name' => 'Moving', 'name_ar' => 'النقل', 'description' => 'Moving services', 'description_ar' => 'خدمات النقل']);
        Category::create(['name' => 'Cleaning', 'name_ar' => 'التنظيف', 'description' => 'Cleaning services', 'description_ar' => 'خدمات التنظيف']);
        Category::create(['name' => 'Outdoor Help', 'name_ar' => 'مساعدة خارجية', 'description' => 'Outdoor help services', 'description_ar' => 'خدمات المساعدة الخارجية']);
        Category::create(['name' => 'Home Repairs', 'name_ar' => 'إصلاحات منزلية', 'description' => 'Home repair services', 'description_ar' => 'خدمات الإصلاحات المنزلية']);
        Category::create(['name' => 'Painting',  'name_ar' => 'الطلاء', 'description' => 'Painting services', 'description_ar' => 'خدمات الطلاء']);
    }
}
