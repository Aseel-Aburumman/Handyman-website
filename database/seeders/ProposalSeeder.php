<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Proposal;

class ProposalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $proposals = [
            // Job 1: Assembling a large bookshelf
            [
                'handyman_id' => 1,
                'gig_id' => 32,
                'proposal' => 'I have extensive experience with large furniture assembly and can ensure the bookshelf is securely and safely assembled in your living room.',
                'price_per_hour' => 25,
                'total' => 75,
                'time' => 3,
                'status_id' => 21,
            ],
            [
                'handyman_id' => 2,
                'gig_id' => 32,
                'proposal' => 'I am well-versed in furniture assembly and will bring the necessary tools to complete the job efficiently.',
                'price_per_hour' => 30,
                'total' => 90,
                'time' => 3,
                'status_id' => 23,
            ],
            [
                'handyman_id' => 3,
                'gig_id' => 32,
                'proposal' => 'Experienced with large-scale furniture setups, I can assist with your bookshelf assembly promptly.',
                'price_per_hour' => 28,
                'total' => 84,
                'time' => 3,
                'status_id' => 21,
            ],
            [
                'handyman_id' => 4,
                'gig_id' => 32,
                'proposal' => 'As a handyman with 5+ years of experience, I will ensure that the bookshelf is assembled correctly and securely.',
                'price_per_hour' => 32,
                'total' => 96,
                'time' => 3,
                'status_id' => 23,
            ],
            [
                'handyman_id' => 5,
                'gig_id' => 32,
                'proposal' => 'Specializing in furniture assembly, I can help with the large bookshelf in a timely and professional manner.',
                'price_per_hour' => 35,
                'total' => 105,
                'time' => 3,
                'status_id' => 21,
            ],

            // Job 2: Assembling an IKEA bed with intricate design
            [
                'handyman_id' => 1,
                'gig_id' => 33,
                'proposal' => 'I am familiar with IKEA products and can handle complex bed assemblies with ease.',
                'price_per_hour' => 30,
                'total' => 90,
                'time' => 3,
                'status_id' => 23,
            ],
            [
                'handyman_id' => 2,
                'gig_id' => 33,
                'proposal' => 'With experience in handling intricate furniture designs, I will make sure the IKEA bed is assembled to your specifications.',
                'price_per_hour' => 28,
                'total' => 84,
                'time' => 3,
                'status_id' => 23,
            ],
            [
                'handyman_id' => 3,
                'gig_id' => 33,
                'proposal' => 'As a skilled handyman, I can tackle complex furniture assembly projects like your IKEA bed with precision.',
                'price_per_hour' => 32,
                'total' => 96,
                'time' => 3,
                'status_id' => 21,
            ],
            [
                'handyman_id' => 4,
                'gig_id' => 33,
                'proposal' => 'IKEA beds are my specialty. I will make sure every part is properly aligned and securely assembled.',
                'price_per_hour' => 25,
                'total' => 75,
                'time' => 3,
                'status_id' => 23,
            ],
            [
                'handyman_id' => 5,
                'gig_id' => 33,
                'proposal' => 'I have assembled various IKEA products and can complete this bed assembly quickly and correctly.',
                'price_per_hour' => 27,
                'total' => 81,
                'time' => 3,
                'status_id' => 21,
            ],

            // Job 3: Painting living room walls
            [
                'handyman_id' => 1,
                'gig_id' => 34,
                'proposal' => 'Experienced in painting and preparation work, I will ensure your living room walls are painted beautifully and cleanly.',
                'price_per_hour' => 40,
                'total' => 160,
                'time' => 4,
                'status_id' => 23,
            ],
            [
                'handyman_id' => 2,
                'gig_id' => 34,
                'proposal' => 'I am skilled at painting and wall preparation, ensuring a flawless finish for your living room in calming blue.',
                'price_per_hour' => 38,
                'total' => 152,
                'time' => 4,
                'status_id' => 21,
            ],
            [
                'handyman_id' => 3,
                'gig_id' => 34,
                'proposal' => 'I can handle wall painting, including priming and clean-up, with careful attention to detail and professionalism.',
                'price_per_hour' => 42,
                'total' => 168,
                'time' => 4,
                'status_id' => 21,
            ],
            [
                'handyman_id' => 4,
                'gig_id' => 34,
                'proposal' => 'I will paint your living room walls efficiently, ensuring quality results and minimal disruption to your space.',
                'price_per_hour' => 35,
                'total' => 140,
                'time' => 4,
                'status_id' => 23,
            ],
            [
                'handyman_id' => 5,
                'gig_id' => 34,
                'proposal' => 'With years of painting experience, I will deliver a professional, calming finish to your living room.',
                'price_per_hour' => 37,
                'total' => 148,
                'time' => 4,
                'status_id' => 21,
            ],

            // Job 4: Installing blinds and assisting with furniture loading
            [
                'handyman_id' => 1,
                'gig_id' => 35,
                'proposal' => 'I can install blinds and assist with heavy furniture loading safely and efficiently.',
                'price_per_hour' => 30,
                'total' => 120,
                'time' => 4,
                'status_id' => 21,
            ],
            [
                'handyman_id' => 2,
                'gig_id' => 35,
                'proposal' => 'Experienced in blind installation and moving assistance, I will handle your furniture carefully during loading.',
                'price_per_hour' => 28,
                'total' => 112,
                'time' => 4,
                'status_id' => 23,
            ],
            [
                'handyman_id' => 3,
                'gig_id' => 35,
                'proposal' => 'I have installed blinds for numerous clients and am also skilled in safely loading large furniture items.',
                'price_per_hour' => 32,
                'total' => 128,
                'time' => 4,
                'status_id' => 23,
            ],
            [
                'handyman_id' => 4,
                'gig_id' => 35,
                'proposal' => 'I will install your blinds and assist with loading large furniture, ensuring the job is done carefully and professionally.',
                'price_per_hour' => 33,
                'total' => 132,
                'time' => 4,
                'status_id' => 21,
            ],
            [
                'handyman_id' => 5,
                'gig_id' => 35,
                'proposal' => 'I am skilled in both installing blinds and moving furniture, making me a great choice for this job.',
                'price_per_hour' => 31,
                'total' => 124,
                'time' => 4,
                'status_id' => 21,
            ],

            // Job 5: Assembling office furniture
            [
                'handyman_id' => 1,
                'gig_id' => 36,
                'proposal' => 'I have a background in office furniture assembly and will ensure your desks, chairs, and cabinets are set up correctly.',
                'price_per_hour' => 35,
                'total' => 140,
                'time' => 4,
                'status_id' => 23,
            ],
            [
                'handyman_id' => 2,
                'gig_id' => 36,
                'proposal' => 'Experienced in furniture assembly, I can handle complex setups and will bring the required tools for efficiency.',
                'price_per_hour' => 33,
                'total' => 132,
                'time' => 4,
                'status_id' => 21,
            ],
            [
                'handyman_id' => 3,
                'gig_id' => 36,
                'proposal' => 'Office furniture assembly is my specialty, and I will assemble your desks, chairs, and cabinets with care.',
                'price_per_hour' => 36,
                'total' => 144,
                'time' => 4,
                'status_id' => 23,
            ],
            [
                'handyman_id' => 4,
                'gig_id' => 36,
                'proposal' => 'With years of experience in assembling office furniture, I will ensure a smooth and efficient setup for your workspace.',
                'price_per_hour' => 34,
                'total' => 136,
                'time' => 4,
                'status_id' => 21,
            ],
            [
                'handyman_id' => 5,
                'gig_id' => 36,
                'proposal' => 'I have assembled various office furniture items and am equipped to handle complex instructions professionally.',
                'price_per_hour' => 32,
                'total' => 128,
                'time' => 4,
                'status_id' => 23,
            ],
        ];

        foreach ($proposals as $proposalData) {
            Proposal::create($proposalData);
        }
    }
}
