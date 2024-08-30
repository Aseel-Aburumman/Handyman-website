<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Skill;

class SkillsTableSeeder extends Seeder
{
    public function run()
    {
        Skill::create(['name' => 'Pipe Installation', 'description' => 'Installation of pipes']);
        Skill::create(['name' => 'Wiring', 'description' => 'Electrical wiring']);
        Skill::create(['name' => 'Woodworking', 'description' => 'Woodworking and carpentry']);
        // Add more skills as needed
    }
}
