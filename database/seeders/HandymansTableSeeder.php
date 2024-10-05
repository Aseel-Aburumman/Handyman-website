<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Handyman;

class HandymansTableSeeder extends Seeder
{
    public function run()
    {
        Handyman::create([
            'user_id' => 3, // Assuming User ID 3 is a handyman
            'experience' => 5,
            'store_location' => '123 Main St',
            'price_per_hour' => 10,
            // 'car'=>'Minivn/SUV',s
            'suspended' => false,
            'bio' => 'Skilled in securely mounting a variety of items, from shelves and mirrors to artwork and fixtures. I ensure precise installation with attention to weight distribution and stability. Whether it’s small decorative pieces or heavy-duty fixtures',
        ]);

        Handyman::create([
            'user_id' => 5, // Assuming User ID 3 is a handyman
            'experience' => 3,
            'price_per_hour' => 13,

            'store_location' => '1 Main St',
            'suspended' => true,
            'bio' => 'I have experience installing various elements on plasterboard, concrete, brick and tiles, ensuring reliable and high-quality fastening💯⚒️🪛🧰',
        ]);

        Handyman::create([
            'user_id' => 23, //23 to 28
            'experience' =>  1,
            'store_location' => ' ',
            'price_per_hour' => 10,

            'suspended' => false,
            'bio' => 'I have a lot of experience mounting TVs, shelves, mirrors concrete walls, brick walls, drywall? No problem! Id love to help you out!',
        ]);

        Handyman::create([
            'user_id' => 24, //23 to 28
            'experience' =>  2,
            'store_location' => ' ',
            'price_per_hour' => 13,

            'suspended' => false,
            'bio' => 'Experienced in mounting many different frame/art substrates, television mounts, shelving, and furniture units. 5 years working for a subcontracting company which include mountig jobs for Sony Animation/ Studios, Disney, and Kevin Berry Fine Arts. ',
        ]);

        Handyman::create([
            'user_id' => 25, //23 to 28
            'experience' =>  5,
            'store_location' => ' ',
            'price_per_hour' => 10,

            'suspended' => false,
            'bio' => 'I have 10 years of experience👨‍🎓 I can install on tiles and marble🧱🪨🪵 I have all the necessary tools🪛🪜🔨🔩 I guarantee my work',
        ]);

        Handyman::create([
            'user_id' => 26, //23 to 28
            'experience' =>  1,
            'store_location' => ' ',
            'price_per_hour' => 20,

            'suspended' => false,
            'bio' => 'Lots of experience mounting TVs, shelves, art, pendant lights, etc. Dedicated handyman with years of experience, available to assist with any type of task, big or small.',
        ]);

        Handyman::create([
            'user_id' => 27, //23 to 28
            'experience' =>  4,
            'store_location' => ' ',
            'price_per_hour' => 18,

            'suspended' => false,
            'bio' => '✅ ❕ 🔨 +🖼 +🪛= 😊 ❕ ✅ I have years of experience, bring my own tools, and would love to help you get things done.',
        ]);

        Handyman::create([
            'user_id' => 28, //23 to 28
            'experience' =>  3,
            'store_location' => ' ',
            'price_per_hour' => 5,

            'suspended' => false,
            'bio' => 'Craftsman with 5 years experience, I specialize in safe and aesthetically pleasing installations: TV mounting, curtains, wardrobes, home decor, mirrors, shelves, IKEA furniture assembly, and more. I ensure precise results using my professional tools on diverse wall surfaces-drywall, concrete,',
        ]);
        // Add more handymen as needed
        // Handyman::factory(5)->create(); // Creates 5 dummy handymen
    }
}
