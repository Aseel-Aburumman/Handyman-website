<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Image;

class ImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $images = [
            // store logos
            ['store_id' => 12, 'name' => 'Bashiti_logo.png'],
            ['store_id' => 13, 'name' => 'Manaseer_logo.png'],
            ['store_id' => 14, 'name' => 'SubhiAbuChallous_logo.png'],
            ['store_id' => 15, 'name' => 'Almemari_logo.png'],
            ['store_id' => 16, 'name' => 'Jotun_logo.png'],
            ['store_id' => 17, 'name' => 'Lafarge_logo.png'],


            ['product_id' => 1, 'name' => 'PrecisionScrewdriversSet.webp'],
            ['product_id' => 2, 'name' => 'MetalToolBox16inch.webp'],
            ['product_id' => 3, 'name' => 'Measuring-Tapes-Tools7-scaled.webp'],
            ['product_id' => 4, 'name' => 'Measuring-Tapes-Tools28-scaled.webp'],
            ['product_id' => 5, 'name' => 'Hammers3-scaled.webp'],
            ['product_id' => 6, 'name' => 'Hammers7-scaled.webp'],
            ['product_id' => 7, 'name' => 'Generators1-scaled.webp'],
            ['product_id' => 8, 'name' => 'AirCompressors2-scaled.webp'],
            ['product_id' => 9, 'name' => 'AirCompressors5-scaled.webp'],
            ['product_id' => 10, 'name' => 'IndustrialCleaningEquipments5-scaled.webp'],

            ['product_id' => 11, 'name' => 'WaterBasedPaint6a-scaled.webp'],
            ['product_id' => 12, 'name' => 'WaterBasedPaint4a-scaled.webp'],
            ['product_id' => 13, 'name' => 'WaterBasedPaint3-scaled.webp'],
            ['product_id' => 14, 'name' => 'WaterBasedPaint1-scaled.webp'],
            ['product_id' => 15, 'name' => 'SolventsPaints2-scaled.webp'],
            ['product_id' => 16, 'name' => 'SolventsPaints7-scaled.webp'],
            ['product_id' => 17, 'name' => 'OilBasedPaints2-scaled.webp'],
            ['product_id' => 18, 'name' => 'OilBasedPaints6-scaled.webp'],

            ['product_id' => 19, 'name' => 'PersonalSafety1-scaled.webp'],
            ['product_id' => 20, 'name' => 'PersonalSafety3a-scaled.webp'],
            ['product_id' => 21, 'name' => 'PersonalSafety6-scaled.webp'],
            ['product_id' => 22, 'name' => 'PersonalSafety8-scaled.webp'],
            ['product_id' => 23, 'name' => 'PersonalSafety9.webp'],
            ['product_id' => 24, 'name' => 'PersonalSafety15-scaled.webp'],

            ['product_id' => 25, 'name' => 'AluminumLadders4-scaled.webp'],
            ['product_id' => 26, 'name' => 'SteelLadders5-scaled.webp'],
            ['product_id' => 27, 'name' => 'OtherLadders2-scaled.webp'],

            ['product_id' => 28, 'name' => 'H19a99b73a54543dcabbc223cdc6caa3f4.webp'],
            ['product_id' => 29, 'name' => 'H9fbd0446bfbb492686a35d301e86c8f68.webp'],
            ['product_id' => 30, 'name' => 'Hf7f4e636f57f41ba91ea1b0c3ebc8218t.webp'],
            ['product_id' => 31, 'name' => 'H6907e04db6bd4d388311d34775632285v.webp'],
            ['product_id' => 32, 'name' => 'H614cb44866864375b9e6d04b7aeaa4a2v.webp'],
            ['product_id' => 33, 'name' => 'H45b38192e85e49db95ff0396d530c0abm.webp'],
            ['product_id' => 34, 'name' => 'سيراميك أرضيات حجري بارز- سيراميك ريماس - 5 (1).webp'],
            ['product_id' => 35, 'name' => 'H57025d0df7294ccd81d4fb30951dc99db.webp'],
            ['product_id' => 36, 'name' => 'H0c5fc312f9c64f6b8f3201ac16b0bd72V.webp'],

            ['product_id' => 37, 'name' => 'PrecisionScrewdriversSet.webp'],
            ['product_id' => 38, 'name' => 'MetalToolBox16inch.webp'],
            ['product_id' => 39, 'name' => 'Measuring-Tapes-Tools7-scaled.webp'],
            ['product_id' => 40, 'name' => 'Measuring-Tapes-Tools28-scaled.webp'],
            ['product_id' => 41, 'name' => 'Hammers3-scaled.webp'],

            ['product_id' => 42, 'name' => 'Hammers7-scaled.webp'],
            ['product_id' => 43, 'name' => 'Generators1-scaled.webp'],
            ['product_id' => 44, 'name' => 'AirCompressors2-scaled.webp'],
            ['product_id' => 45, 'name' => 'AirCompressors5-scaled.webp'],
            ['product_id' => 46, 'name' => 'IndustrialCleaningEquipments5-scaled.webp'],

            ['product_id' => 47, 'name' => 'AluminumLadders4-scaled.webp'],
            ['product_id' => 48, 'name' => 'SteelLadders5-scaled.webp'],
            ['product_id' => 49, 'name' => 'OtherLadders2-scaled.webp'],


            ['product_id' => 50, 'name' => 'PrecisionScrewdriversSet.webp'],
            ['product_id' => 51, 'name' => 'MetalToolBox16inch.webp'],
            ['product_id' => 52, 'name' => 'Measuring-Tapes-Tools7-scaled.webp'],
            ['product_id' => 53, 'name' => 'Measuring-Tapes-Tools28-scaled.webp'],

            ['product_id' => 54, 'name' => 'PrecisionScrewdriversSet.webp'],
            ['product_id' => 55, 'name' => 'MetalToolBox16inch.webp'],
            ['product_id' => 56, 'name' => 'Measuring-Tapes-Tools7-scaled.webp'],
            ['product_id' => 57, 'name' => 'Measuring-Tapes-Tools28-scaled.webp'],

            ['store_id' => 1, 'name' => 'store1.jpg'],
            ['store_id' => 2, 'name' => 'store2.jpg'],
            ['store_id' => 3, 'name' => 'store3.jpg'],
            ['store_id' => 4, 'name' => 'store4.jpg'],
            ['store_id' => 5, 'name' => 'store5.jpg'],
            ['store_id' => 6, 'name' => 'store6.jpg'],
            ['store_id' => 7, 'name' => 'store7.jpg'],
            ['store_id' => 8, 'name' => 'store8.jpg'],
            ['store_id' => 9, 'name' => 'store9.jpg'],
            ['store_id' => 10, 'name' => 'store10.jpg'],
            ['store_id' => 11, 'name' => 'store11.jpg'],
        ];
        foreach ($images as $image) {
            Image::create($image);
        }
    }
}
