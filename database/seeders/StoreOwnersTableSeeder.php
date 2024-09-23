<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\StoreOwner;

class StoreOwnersTableSeeder extends Seeder
{
    public function run()
    {
        // Store Owners


        StoreOwner::create([
            'user_id' => 6,
            'store_name' => 'Garden Tools Store',
            'store_name_ar' => 'متجر أدوات الحديقة',
            'contact_number' => '555-9876',
            'address' => '101 Garden St',
            'address_ar' => 'شارع 101 الحديقة',
            'rating' => 4.9,
            'certificate_id' => 4,
        ]);

        StoreOwner::create([
            'user_id' => 7,
            'store_name' => 'Home Fix Supplies',
            'store_name_ar' => 'إمدادات تصليح المنزل',
            'contact_number' => '555-4321',
            'address' => '102 Home Fix Ave',
            'address_ar' => 'شارع 102 تصليح المنزل',
            'rating' => 4.8,
            'certificate_id' => 5,
        ]);

        StoreOwner::create([
            'user_id' => 8,
            'store_name' => 'Outdoor Gear Mart',
            'store_name_ar' => 'سوق المعدات الخارجية',
            'contact_number' => '555-6543',
            'address' => '103 Outdoor Blvd',
            'address_ar' => 'بوليفارد 103 في الهواء الطلق',
            'rating' => 4.6,
            'certificate_id' => 6,
        ]);

        StoreOwner::create([
            'user_id' => 9,
            'store_name' => 'The DIY Store',
            'store_name_ar' => 'متجر الأعمال اليدوية',
            'contact_number' => '555-3210',
            'address' => '104 DIY St',
            'address_ar' => 'شارع 104 الأعمال اليدوية',
            'rating' => 4.5,
            'certificate_id' => 7,
        ]);

        StoreOwner::create([
            'user_id' => 10,
            'store_name' => 'Paint Pro Supplies',
            'store_name_ar' => 'إمدادات محترفي الطلاء',
            'contact_number' => '555-7890',
            'address' => '105 Paint Ave',
            'address_ar' => 'شارع 105 الطلاء',
            'rating' => 4.9,
            'certificate_id' => 8,
        ]);

        StoreOwner::create([
            'user_id' => 11,
            'store_name' => 'Auto Parts Depot',
            'store_name_ar' => 'مستودع قطع غيار السيارات',
            'contact_number' => '555-2468',
            'address' => '106 Auto St',
            'address_ar' => 'شارع 106 السيارات',
            'rating' => 4.7,
            'certificate_id' => 9,
        ]);

        StoreOwner::create([
            'user_id' => 12,
            'store_name' => 'Kitchenware House',
            'store_name_ar' => 'بيت أدوات المطبخ',
            'contact_number' => '555-1357',
            'address' => '107 Kitchenware Ave',
            'address_ar' => 'شارع 107 أدوات المطبخ',
            'rating' => 4.6,
            'certificate_id' => 10,
        ]);

        StoreOwner::create([
            'user_id' => 13,
            'store_name' => 'Tech Supplies Mart',
            'store_name_ar' => 'سوق مستلزمات التكنولوجيا',
            'contact_number' => '555-0246',
            'address' => '108 Tech St',
            'address_ar' => 'شارع 108 التكنولوجيا',
            'rating' => 4.5,
            'certificate_id' => 11,
        ]);

        StoreOwner::create([
            'user_id' => 14,
            'store_name' => 'Plumbing World',
            'store_name_ar' => 'عالم السباكة',
            'contact_number' => '555-9753',
            'address' => '109 Plumbing Blvd',
            'address_ar' => 'بوليفارد 109 السباكة',
            'rating' => 4.8,
            'certificate_id' => 12,
        ]);

        StoreOwner::create([
            'user_id' => 15, // Assuming User ID 4 is a store owner
            'store_name' => 'Tool Emporium',
            'store_name_ar' => 'إمبراطورية الأدوات',
            'contact_number' => '555-1234',
            'address' => '456 Store Blvd',
            'address_ar' => 'شارع 456 المتجر',
            'rating' => 4.5,
            'certificate_id' => 2, // Assuming Certificate ID 2 exists
        ]);

        StoreOwner::create([
            'user_id' => 16,
            'store_name' => 'Hardware Central',
            'store_name_ar' => 'مركز الأدوات',
            'contact_number' => '555-5678',
            'address' => '789 Central St',
            'address_ar' => 'شارع 789 المركزي',
            'rating' => 4.7,
            'certificate_id' => 3,
        ]);

        StoreOwner::create([
            'user_id' => 17,
            'store_name' => 'Bashiti Depot',
            'store_name_ar' => 'البشيتي',
            'contact_number' => '555-5678',
            'address' => '789 Central St',
            'address_ar' => 'شارع 789 المركزي',
            'rating' => 4.7,
            'certificate_id' => 3,
        ]);

        StoreOwner::create([
            'user_id' => 18,
            'store_name' => 'Manaseer Group',
            'store_name_ar' => 'المناصير',
            'contact_number' => '555-5678',
            'address' => '789 Central St',
            'address_ar' => 'شارع 789 المركزي',
            'rating' => 4.3,
            'certificate_id' => 3,
        ]);


        StoreOwner::create([
            'user_id' => 19,
            'store_name' => 'Subhi Abu Ghallous',
            'store_name_ar' => 'صبحي ابو غلوس ',
            'contact_number' => '555-5678',
            'address' => '789 Central St',
            'address_ar' => 'شارع 789 المركزي',
            'rating' => 4.5,
            'certificate_id' => 3,
        ]);


        StoreOwner::create([
            'user_id' => 20,
            'store_name' => 'Almemari',
            'store_name_ar' => 'المعماري',
            'contact_number' => '555-5678',
            'address' => '789 Central St',
            'address_ar' => 'شارع 789 المركزي',
            'rating' => 4.7,
            'certificate_id' => 3,
        ]);


        StoreOwner::create([
            'user_id' => 21,
            'store_name' => 'Jotun',
            'store_name_ar' => 'دهانات جوتن',
            'contact_number' => '555-5678',
            'address' => '789 Central St',
            'address_ar' => 'شارع 789 المركزي',
            'rating' => 4.0,
            'certificate_id' => 3,
        ]);


        StoreOwner::create([
            'user_id' => 22,
            'store_name' => 'Lafarge',
            'store_name_ar' => 'لافارج للاسمنت',
            'contact_number' => '555-5678',
            'address' => '789 Central St',
            'address_ar' => 'شارع 789 المركزي',
            'rating' => 4.9,
            'certificate_id' => 3,
        ]);
    }
}
