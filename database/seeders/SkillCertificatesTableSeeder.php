<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\SkillCertificate;

class SkillCertificatesTableSeeder extends Seeder
{
    public function run()
    {
        SkillCertificate::create([
            'skill_id' => 1, // Assuming Skill ID 1 is 'Pipe Installation'
            'handyman_id' => 1, // Assuming Handyman ID 1 exists
            'status_id' => 1, // Assuming Status ID 1 is 'Approved'
            'certificate_id' => 1, // Assuming Certificate ID 1 exists
        ]);
        // Add more skill certificates as needed
    }
}
