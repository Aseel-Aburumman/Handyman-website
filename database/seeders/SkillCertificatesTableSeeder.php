<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\SkillCertificate;

class SkillCertificatesTableSeeder extends Seeder
{
    public function run()
    {
        $handymanSkills = [


            [
                'skill_id' => 1, // Assuming Skill ID 1 is 'Pipe Installation'
                'handyman_id' => 1, // Assuming Handyman ID 1 exists
                'status_id' => 1, // Assuming Status ID 1 is 'Approved'
                'certificate_id' => 1, // Assuming Certificate ID 1 exists
            ],

            ['handyman_id' => 1, 'skill_id' => 10, 'certificate_id' => 14, 'status_id' => 1],
            ['handyman_id' => 1, 'skill_id' => 3, 'certificate_id' => 14, 'status_id' => 3],
            ['handyman_id' => 1, 'skill_id' => 5, 'certificate_id' => 14, 'status_id' => 1],

            // Handyman ID 2
            ['handyman_id' => 2, 'skill_id' => 2, 'certificate_id' => 14, 'status_id' => 1],
            ['handyman_id' => 2, 'skill_id' => 4, 'certificate_id' => 14, 'status_id' => 1],
            ['handyman_id' => 2, 'skill_id' => 6, 'certificate_id' => 14, 'status_id' => 2],

            // Handyman ID 3
            ['handyman_id' => 3, 'skill_id' => 7, 'certificate_id' => 14, 'status_id' => 1],
            ['handyman_id' => 3, 'skill_id' => 8, 'certificate_id' => 14, 'status_id' => 1],
            ['handyman_id' => 3, 'skill_id' => 10, 'certificate_id' => 14, 'status_id' => 3],
            ['handyman_id' => 3, 'skill_id' => 11, 'certificate_id' => 14, 'status_id' => 1],

            // Handyman ID 4
            ['handyman_id' => 4, 'skill_id' => 9, 'certificate_id' => 14, 'status_id' => 1],
            ['handyman_id' => 4, 'skill_id' => 13, 'certificate_id' => 14, 'status_id' => 1],
            ['handyman_id' => 4, 'skill_id' => 14, 'certificate_id' => 14, 'status_id' => 2],
            ['handyman_id' => 4, 'skill_id' => 17, 'certificate_id' => 14, 'status_id' => 1],

            // Handyman ID 5
            ['handyman_id' => 5, 'skill_id' => 15, 'certificate_id' => 14, 'status_id' => 1],
            ['handyman_id' => 5, 'skill_id' => 18, 'certificate_id' => 14, 'status_id' => 3],
            ['handyman_id' => 5, 'skill_id' => 19, 'certificate_id' => 14, 'status_id' => 1],

            // Handyman ID 6
            ['handyman_id' => 6, 'skill_id' => 16, 'certificate_id' => 14, 'status_id' => 1],
            ['handyman_id' => 6, 'skill_id' => 20, 'certificate_id' => 14, 'status_id' => 2],
            ['handyman_id' => 6, 'skill_id' => 22, 'certificate_id' => 14, 'status_id' => 1],
            ['handyman_id' => 6, 'skill_id' => 23, 'certificate_id' => 14, 'status_id' => 3],

            // Handyman ID 7
            ['handyman_id' => 7, 'skill_id' => 21, 'certificate_id' => 14, 'status_id' => 1],
            ['handyman_id' => 7, 'skill_id' => 24, 'certificate_id' => 14, 'status_id' => 2],
            ['handyman_id' => 7, 'skill_id' => 25, 'certificate_id' => 14, 'status_id' => 1],
            ['handyman_id' => 7, 'skill_id' => 27, 'certificate_id' => 14, 'status_id' => 1],

            // Handyman ID 8
            ['handyman_id' => 8, 'skill_id' => 26, 'certificate_id' => 14, 'status_id' => 3],
            ['handyman_id' => 8, 'skill_id' => 28, 'certificate_id' => 14, 'status_id' => 1],
            ['handyman_id' => 8, 'skill_id' => 30, 'certificate_id' => 14, 'status_id' => 1],
            ['handyman_id' => 8, 'skill_id' => 32, 'certificate_id' => 14, 'status_id' => 2],

        ];

        foreach ($handymanSkills as $handymanSkill) {
            SkillCertificate::create($handymanSkill);
        }
        // Add more skill certificates as needed
    }
}
