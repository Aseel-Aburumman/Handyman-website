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



        ];
        foreach ($images as $image) {
            Image::create($image);
        }
    }
}
