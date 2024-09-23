<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Store;

class StoresTableSeeder extends Seeder
{
    public function run()
    {
        // Store 1 - Handyman Tools


        // Store 3 - Garden Tools Store
        Store::create([
            'store_owner_id' => 1,
            'name' => 'Garden Tools Store',
            'name_ar' => 'متجر أدوات الحديقة',
            'location' => '789 Garden Blvd',
            'description' => 'Find all your garden tools and supplies here',
            'description_ar' => 'تجد هنا جميع أدواتك وإمداداتك للحديقة',
            'status_id' => 4, // Assuming Status ID 4 is 'Open'
            'rating' => 4.9,
        ]);

        // Store 4 - Home Fix Supplies
        Store::create([
            'store_owner_id' => 2,
            'name' => 'Home Fix Supplies',
            'name_ar' => 'إمدادات إصلاح المنزل',
            'location' => '123 Fixer St',
            'description' => 'Everything you need for home repair and DIY',
            'description_ar' => 'كل ما تحتاجه لإصلاح المنزل والمشاريع اليدوية',
            'status_id' => 4, // Assuming Status ID 4 is 'Open'
            'rating' => 4.7,
        ]);

        // Store 5 - Outdoor Gear Mart
        Store::create([
            'store_owner_id' => 3,
            'name' => 'Outdoor Gear Mart',
            'name_ar' => 'سوق المعدات الخارجية',
            'location' => '456 Adventure Ave',
            'description' => 'Best outdoor gear and camping supplies',
            'description_ar' => 'أفضل معدات خارجية وإمدادات التخييم',
            'status_id' => 4, // Assuming Status ID 4 is 'Open'
            'rating' => 4.6,
        ]);

        // Store 6 - The DIY Store
        Store::create([
            'store_owner_id' => 4,
            'name' => 'The DIY Store',
            'name_ar' => 'متجر الأعمال اليدوية',
            'location' => '789 Maker St',
            'description' => 'All DIY enthusiasts can find tools and supplies here',
            'description_ar' => 'جميع محبي الأعمال اليدوية يمكنهم إيجاد الأدوات والإمدادات هنا',
            'status_id' => 4, // Assuming Status ID 4 is 'Open'
            'rating' => 4.5,
        ]);

        // Store 7 - Paint Pro Supplies
        Store::create([
            'store_owner_id' => 5,
            'name' => 'Paint Pro Supplies',
            'name_ar' => 'إمدادات محترفي الطلاء',
            'location' => '101 Paint Ave',
            'description' => 'Professional paint supplies for your projects',
            'description_ar' => 'إمدادات الطلاء الاحترافية لمشاريعك',
            'status_id' => 4, // Assuming Status ID 4 is 'Open'
            'rating' => 4.9,
        ]);

        // Store 8 - Auto Parts Depot
        Store::create([
            'store_owner_id' => 6,
            'name' => 'Auto Parts Depot',
            'name_ar' => 'مستودع قطع غيار السيارات',
            'location' => '202 Car Blvd',
            'description' => 'Find the best deals on car parts and accessories',
            'description_ar' => 'احصل على أفضل الصفقات على قطع غيار السيارات والإكسسوارات',
            'status_id' => 4, // Assuming Status ID 4 is 'Open'
            'rating' => 4.8,
        ]);

        // Store 9 - Kitchenware House
        Store::create([
            'store_owner_id' => 7,
            'name' => 'Kitchenware House',
            'name_ar' => 'بيت أدوات المطبخ',
            'location' => '303 Chef St',
            'description' => 'Top-quality kitchenware for all your cooking needs',
            'description_ar' => 'أدوات مطبخ عالية الجودة لجميع احتياجاتك في الطبخ',
            'status_id' => 4, // Assuming Status ID 4 is 'Open'
            'rating' => 4.7,
        ]);

        // Store 10 - Tech Supplies Mart
        Store::create([
            'store_owner_id' => 8,
            'name' => 'Tech Supplies Mart',
            'name_ar' => 'سوق مستلزمات التكنولوجيا',
            'location' => '404 Tech Park',
            'description' => 'All the latest tech gadgets and supplies',
            'description_ar' => 'كل الأدوات التكنولوجية الحديثة والإمدادات',
            'status_id' => 4, // Assuming Status ID 4 is 'Open'
            'rating' => 4.6,
        ]);

        // Store 11 - Plumbing World
        Store::create([
            'store_owner_id' => 9,
            'name' => 'Plumbing World',
            'name_ar' => 'عالم السباكة',
            'location' => '505 Plumbing St',
            'description' => 'Complete selection of plumbing tools and equipment',
            'description_ar' => 'تشكيلة كاملة من أدوات ومعدات السباكة',
            'status_id' => 4, // Assuming Status ID 4 is 'Open'
            'rating' => 4.9,
        ]);

        Store::create([
            'store_owner_id' => 10,
            'name' => 'Tool Emporium',
            'name_ar' => 'إمبراطورية الأدوات',
            'location' => '456 Store Blvd',
            'description' => 'All tools needed for handymen',
            'description_ar' => 'جميع الأدوات اللازمة للحرفيين',
            'status_id' => 4, // Assuming Status ID 4 is 'Open'
            'rating' => 4.7,
        ]);

        // Store 2 - Hardware Central
        Store::create([
            'store_owner_id' => 11,
            'name' => 'Hardware Central',
            'name_ar' => 'مركز الأدوات',
            'location' => '456 Central Ave',
            'description' => 'Your one-stop shop for hardware essentials',
            'description_ar' => 'محلك الوحيد لكل المستلزمات الأساسية للأدوات',
            'status_id' => 4, // Assuming Status ID 4 is 'Open'
            'rating' => 4.8,
        ]);

        Store::create([
            'store_owner_id' => 12,
            'name' => 'Bashiti Depot',
            'name_ar' => 'البشيتي',
            'location' => '456 Central Ave',
            'description' => 'Your one-stop shop for hardware essentials',
            'description_ar' => 'محلك الوحيد لكل المستلزمات الأساسية للأدوات',
            'status_id' => 4, // Assuming Status ID 4 is 'Open'
            'rating' => 4.7,
        ]);

        Store::create([
            'store_owner_id' => 13,
            'name' => 'Manaseer Group',
            'name_ar' => 'المناصير',
            'location' => '456 Central Ave',
            'description' => 'Your one-stop shop for hardware essentials',
            'description_ar' => 'محلك الوحيد لكل المستلزمات الأساسية للأدوات',
            'status_id' => 4, // Assuming Status ID 4 is 'Open'
            'rating' => 4.8,
        ]);

        Store::create([
            'store_owner_id' => 14,
            'name' => 'Subhi Abu Ghallous',
            'name_ar' => 'صبحي ابو غلوس ',
            'location' => '456 Central Ave',
            'description' => 'Your one-stop shop for hardware essentials',
            'description_ar' => 'محلك الوحيد لكل المستلزمات الأساسية للأدوات',
            'status_id' => 4, // Assuming Status ID 4 is 'Open'
            'rating' => 4.5,
        ]);

        Store::create([
            'store_owner_id' => 15,
            'name' => 'Almemari',
            'name_ar' => 'المعماري',
            'location' => '456 Central Ave',
            'description' => 'Your one-stop shop for hardware essentials',
            'description_ar' => 'محلك الوحيد لكل المستلزمات الأساسية للأدوات',
            'status_id' => 4, // Assuming Status ID 4 is 'Open'
            'rating' => 4.7,
        ]);

        Store::create([
            'store_owner_id' => 16,
            'name' => 'Jotun',
            'name_ar' => 'دهانات جوتن',
            'location' => '456 Central Ave',
            'description' => 'Your one-stop shop for hardware essentials',
            'description_ar' => 'محلك الوحيد لكل المستلزمات الأساسية للأدوات',
            'status_id' => 4, // Assuming Status ID 4 is 'Open'
            'rating' => 4.0,
        ]);

        Store::create([
            'store_owner_id' => 17,
            'name' =>  'Lafarge',
            'name_ar' => 'لافارج للاسمنت',
            'location' => '456 Central Ave',
            'description' => 'Your one-stop shop for hardware essentials',
            'description_ar' => 'محلك الوحيد لكل المستلزمات الأساسية للأدوات',
            'status_id' => 4, // Assuming Status ID 4 is 'Open'
            'rating' => 4.9,
        ]);
    }
}
