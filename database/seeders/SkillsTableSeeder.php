<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Skill;

class SkillsTableSeeder extends Seeder
{
    public function run()
    {
        $skills = [
            ['name' => 'Pipe Installation', 'description' => 'Installation of pipes'],
            ['name' => 'Wiring', 'description' => 'Electrical wiring and connections'],
            ['name' => 'Woodworking', 'description' => 'Woodworking and carpentry'],
            ['name' => 'Drywall Repair', 'description' => 'Repairing and finishing drywall surfaces'],
            ['name' => 'Furniture Assembly', 'description' => 'Assembling various types of furniture'],
            ['name' => 'TV Mounting', 'description' => 'Mounting TVs and screens on walls'],
            ['name' => 'Carpet Cleaning', 'description' => 'Cleaning carpets and upholstery'],
            ['name' => 'Window Washing', 'description' => 'Professional window cleaning'],
            ['name' => 'Roof Repair', 'description' => 'Roofing repairs and maintenance'],
            ['name' => 'Plumbing Repair', 'description' => 'Fixing leaks and plumbing issues'],
            ['name' => 'Fence Installation', 'description' => 'Installing fences and gates'],
            ['name' => 'Pest Control', 'description' => 'Removing pests and insects'],
            ['name' => 'Tree Trimming', 'description' => 'Trimming trees and shrubbery'],
            ['name' => 'Concrete Repair', 'description' => 'Repairing concrete surfaces'],
            ['name' => 'Tile Installation', 'description' => 'Installing tiles for floors and walls'],
            ['name' => 'Power Washing', 'description' => 'High-pressure cleaning of surfaces'],
            ['name' => 'Painting', 'description' => 'Interior and exterior painting services'],
            ['name' => 'Appliance Repair', 'description' => 'Repairing home appliances'],
            ['name' => 'Cabinet Installation', 'description' => 'Installing kitchen and bathroom cabinets'],
            ['name' => 'Gutter Cleaning', 'description' => 'Cleaning and maintenance of gutters'],
            ['name' => 'Landscape Design', 'description' => 'Designing and planning landscapes'],
            ['name' => 'Security System Setup', 'description' => 'Installing security and alarm systems'],
            ['name' => 'Smart Home Setup', 'description' => 'Installing and configuring smart home devices'],
            ['name' => 'Heating Repair', 'description' => 'Repairing heating systems'],
            ['name' => 'Air Conditioning Installation', 'description' => 'Installing air conditioning units'],
            ['name' => 'Garage Door Repair', 'description' => 'Repairing garage doors and openers'],
            ['name' => 'Waterproofing', 'description' => 'Applying waterproofing treatments'],
            // Additional skills
            ['name' => 'Garden Maintenance', 'description' => 'Maintaining gardens and lawns'],
            ['name' => 'Irrigation System Installation', 'description' => 'Installing lawn and garden irrigation systems'],
            ['name' => 'Pool Cleaning', 'description' => 'Cleaning and maintenance of swimming pools'],
            ['name' => 'Home Theater Setup', 'description' => 'Setting up home theater systems'],
            ['name' => 'Solar Panel Installation', 'description' => 'Installing solar panels on rooftops'],
            ['name' => 'Chimney Cleaning', 'description' => 'Cleaning and maintenance of chimneys'],
            ['name' => 'Locksmith Services', 'description' => 'Installing and repairing locks'],
            ['name' => 'Emergency Locksmithing', 'description' => 'Emergency lockout assistance'],
            ['name' => 'Water Heater Repair', 'description' => 'Repairing and maintaining water heaters'],
            ['name' => 'Flooring Installation', 'description' => 'Installing hardwood, laminate, and other flooring types'],
            ['name' => 'Window Installation', 'description' => 'Installing new or replacement windows'],
            ['name' => 'Door Installation', 'description' => 'Installing interior and exterior doors'],
            ['name' => 'Cabinet Refinishing', 'description' => 'Refinishing and repainting cabinets'],
            ['name' => 'Grout Repair', 'description' => 'Repairing and replacing grout between tiles'],
            ['name' => 'Wallpaper Installation', 'description' => 'Installing wallpaper on interior walls'],
            ['name' => 'Deck Building', 'description' => 'Building and repairing wooden decks'],
            ['name' => 'Patio Construction', 'description' => 'Constructing outdoor patios'],
            ['name' => 'Insulation Installation', 'description' => 'Installing insulation in walls and attics'],
            ['name' => 'Mold Removal', 'description' => 'Removing mold and mildew'],
            ['name' => 'Radon Testing', 'description' => 'Testing homes for radon gas'],
            ['name' => 'Garage Organizing', 'description' => 'Organizing and decluttering garage spaces'],
            ['name' => 'Interior Design Consultation', 'description' => 'Providing interior design advice and plans'],
            ['name' => 'Home Staging', 'description' => 'Preparing homes for sale by staging furniture and decor'],
            ['name' => 'Skylight Installation', 'description' => 'Installing skylights in roofs'],
            ['name' => 'Ventilation System Repair', 'description' => 'Repairing home ventilation systems'],
        ];

        foreach ($skills as $skill) {
            Skill::create($skill);
        }
    }
}
