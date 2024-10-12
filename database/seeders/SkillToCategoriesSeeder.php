<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\SkillToCategorie;

class SkillToCategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {


        SkillToCategorie::create(['skill_id' => '1', 'category_id' => '6']);
        SkillToCategorie::create(['skill_id' => '2', 'category_id' => '6']);
        SkillToCategorie::create(['skill_id' => '3', 'category_id' => '1']);
        SkillToCategorie::create(['skill_id' => '3', 'category_id' => '2']);
    }
}
