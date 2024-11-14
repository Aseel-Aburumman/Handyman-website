<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\SkillToCategorie;

class SkillToCategoriesSeeder extends Seeder
{
    public function run()
    {
        $skillToCategories = [
            // Original skills
            ['skill_id' => 1, 'category_id' => 6], // Pipe Installation -> Home Repairs

            ['skill_id' => 2, 'category_id' => 6], // Wiring -> Home Repairs
            ['skill_id' => 3, 'category_id' => 1], // Woodworking -> Assembly

            ['skill_id' => 4, 'category_id' => 6], // Drywall Repair -> Home Repairs
            ['skill_id' => 5, 'category_id' => 1], // Furniture Assembly -> Assembly

            ['skill_id' => 6, 'category_id' => 2], // TV Mounting -> Mounting
            ['skill_id' => 7, 'category_id' => 4], // Carpet Cleaning -> Cleaning
            ['skill_id' => 8, 'category_id' => 4], // Window Washing -> Cleaning
            ['skill_id' => 9, 'category_id' => 6], // Roof Repair -> Home Repairs
            ['skill_id' => 10, 'category_id' => 6], // Plumbing Repair -> Home Repairs
            
            ['skill_id' => 11, 'category_id' => 5], // Fence Installation -> Outdoor Help
            ['skill_id' => 12, 'category_id' => 5], // Pest Control -> Outdoor Help
            ['skill_id' => 13, 'category_id' => 5], // Tree Trimming -> Outdoor Help
            ['skill_id' => 14, 'category_id' => 6], // Concrete Repair -> Home Repairs
            ['skill_id' => 15, 'category_id' => 6], // Tile Installation -> Home Repairs
            ['skill_id' => 16, 'category_id' => 5], // Power Washing -> Outdoor Help
            ['skill_id' => 17, 'category_id' => 7], // Painting -> Painting
            ['skill_id' => 18, 'category_id' => 6], // Appliance Repair -> Home Repairs
            ['skill_id' => 19, 'category_id' => 1], // Cabinet Installation -> Assembly
            ['skill_id' => 20, 'category_id' => 5], // Gutter Cleaning -> Outdoor Help
            ['skill_id' => 21, 'category_id' => 5], // Landscape Design -> Outdoor Help
            ['skill_id' => 22, 'category_id' => 6], // Security System Setup -> Home Repairs
            ['skill_id' => 23, 'category_id' => 6], // Smart Home Setup -> Home Repairs
            ['skill_id' => 24, 'category_id' => 6], // Heating Repair -> Home Repairs
            ['skill_id' => 25, 'category_id' => 6], // Air Conditioning Installation -> Home Repairs
            ['skill_id' => 26, 'category_id' => 6], // Garage Door Repair -> Home Repairs
            ['skill_id' => 27, 'category_id' => 5], // Waterproofing -> Outdoor Help

            // New skills
            ['skill_id' => 28, 'category_id' => 5], // Garden Maintenance -> Outdoor Help
            ['skill_id' => 29, 'category_id' => 5], // Irrigation System Installation -> Outdoor Help
            ['skill_id' => 30, 'category_id' => 4], // Pool Cleaning -> Cleaning
            ['skill_id' => 31, 'category_id' => 6], // Home Theater Setup -> Home Repairs
            ['skill_id' => 32, 'category_id' => 6], // Solar Panel Installation -> Home Repairs
            ['skill_id' => 33, 'category_id' => 4], // Chimney Cleaning -> Cleaning
            ['skill_id' => 34, 'category_id' => 6], // Locksmith Services -> Home Repairs
            ['skill_id' => 35, 'category_id' => 6], // Emergency Locksmithing -> Home Repairs
            ['skill_id' => 36, 'category_id' => 6], // Water Heater Repair -> Home Repairs
            ['skill_id' => 37, 'category_id' => 6], // Flooring Installation -> Home Repairs
            ['skill_id' => 38, 'category_id' => 6], // Window Installation -> Home Repairs
            ['skill_id' => 39, 'category_id' => 6], // Door Installation -> Home Repairs
            ['skill_id' => 40, 'category_id' => 7], // Cabinet Refinishing -> Painting
            ['skill_id' => 41, 'category_id' => 6], // Grout Repair -> Home Repairs
            ['skill_id' => 42, 'category_id' => 7], // Wallpaper Installation -> Painting
            ['skill_id' => 43, 'category_id' => 5], // Deck Building -> Outdoor Help
            ['skill_id' => 44, 'category_id' => 5], // Patio Construction -> Outdoor Help
            ['skill_id' => 45, 'category_id' => 6], // Insulation Installation -> Home Repairs
            ['skill_id' => 46, 'category_id' => 4], // Mold Removal -> Cleaning
            ['skill_id' => 47, 'category_id' => 6], // Radon Testing -> Home Repairs
            ['skill_id' => 48, 'category_id' => 5], // Garage Organizing -> Outdoor Help
            ['skill_id' => 49, 'category_id' => 6], // Interior Design Consultation -> Home Repairs
            ['skill_id' => 50, 'category_id' => 6], // Home Staging -> Home Repairs
            ['skill_id' => 51, 'category_id' => 5], // Skylight Installation -> Outdoor Help
            ['skill_id' => 52, 'category_id' => 6], // Ventilation System Repair -> Home Repairs
        ];

        foreach ($skillToCategories as $relation) {
            SkillToCategorie::create($relation);
        }
    }
}
