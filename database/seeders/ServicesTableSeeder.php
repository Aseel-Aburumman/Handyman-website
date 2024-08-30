<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Service;

class ServicesTableSeeder extends Seeder
{
    public function run()
    {
        // Assembly Services
        Service::create(['category_id' => 1, 'name' => 'General Furniture Assembly', 'description' => 'Assembly of various types of furniture']);
        Service::create(['category_id' => 1, 'name' => 'IKEA Assembly', 'description' => 'Assembly of IKEA furniture']);
        Service::create(['category_id' => 1, 'name' => 'Crib Assembly', 'description' => 'Assembly of baby cribs']);
        Service::create(['category_id' => 1, 'name' => 'PAX Assembly', 'description' => 'Assembly of PAX wardrobes']);
        Service::create(['category_id' => 1, 'name' => 'Bookshelf Assembly', 'description' => 'Assembly of bookshelves']);
        Service::create(['category_id' => 1, 'name' => 'Desk Assembly', 'description' => 'Assembly of desks']);

        // Mounting Services
        Service::create(['category_id' => 2, 'name' => 'Hang Art, Mirror & Decor', 'description' => 'Mounting art, mirrors, and decorations']);
        Service::create(['category_id' => 2, 'name' => 'Install Blinds & Window Treatments', 'description' => 'Installing blinds and window treatments']);
        Service::create(['category_id' => 2, 'name' => 'Mount & Anchor Furniture', 'description' => 'Mounting and anchoring furniture']);
        Service::create(['category_id' => 2, 'name' => 'Install Shelves, Rods & Hooks', 'description' => 'Installing shelves, rods, and hooks']);
        Service::create(['category_id' => 2, 'name' => 'TV Mounting', 'description' => 'Mounting televisions']);
        Service::create(['category_id' => 2, 'name' => 'Other Mounting', 'description' => 'Other types of mounting services']);

        // Moving Services
        Service::create(['category_id' => 3, 'name' => 'Help Moving', 'description' => 'Assistance with moving items']);
        Service::create(['category_id' => 3, 'name' => 'Truck-Assisted Help Moving', 'description' => 'Moving help with a truck']);
        Service::create(['category_id' => 3, 'name' => 'Trash & Furniture Removal', 'description' => 'Removal of trash and old furniture']);
        Service::create(['category_id' => 3, 'name' => 'Heavy Lifting & Loading', 'description' => 'Assistance with heavy lifting and loading']);
        Service::create(['category_id' => 3, 'name' => 'Rearrange Furniture', 'description' => 'Rearranging furniture within the home']);
        Service::create(['category_id' => 3, 'name' => 'Junk Haul Away', 'description' => 'Hauling away junk']);

        // Cleaning Services
        Service::create(['category_id' => 4, 'name' => 'Cleaning', 'description' => 'General cleaning services']);
        Service::create(['category_id' => 4, 'name' => 'Party Clean Up', 'description' => 'Cleaning up after parties']);
        Service::create(['category_id' => 4, 'name' => 'Apartment Cleaning', 'description' => 'Cleaning apartments']);
        Service::create(['category_id' => 4, 'name' => 'Deep Clean', 'description' => 'Deep cleaning services']);
        Service::create(['category_id' => 4, 'name' => 'Garage Cleaning', 'description' => 'Cleaning garages']);
        Service::create(['category_id' => 4, 'name' => 'Move Out Clean', 'description' => 'Cleaning after moving out']);

        // Outdoor Help Services
        Service::create(['category_id' => 5, 'name' => 'Yard Work', 'description' => 'Yard work services']);
        Service::create(['category_id' => 5, 'name' => 'Lawn Care', 'description' => 'Lawn care services']);
        Service::create(['category_id' => 5, 'name' => 'Snow Removal', 'description' => 'Snow removal services']);
        Service::create(['category_id' => 5, 'name' => 'Landscaping Help', 'description' => 'Help with landscaping']);
        Service::create(['category_id' => 5, 'name' => 'Branch & Hedge Trimming', 'description' => 'Trimming branches and hedges']);
        Service::create(['category_id' => 5, 'name' => 'Gardening & Weeding', 'description' => 'Gardening and weeding services']);

        // Home Repairs Services
        Service::create(['category_id' => 6, 'name' => 'Door, Cabinet, & Furniture Repair', 'description' => 'Repairing doors, cabinets, and furniture']);
        Service::create(['category_id' => 6, 'name' => 'Wall Repair', 'description' => 'Wall repair services']);
        Service::create(['category_id' => 6, 'name' => 'Sealing & Caulking', 'description' => 'Sealing and caulking services']);
        Service::create(['category_id' => 6, 'name' => 'Appliance Installation & Repairs', 'description' => 'Installing and repairing appliances']);
        Service::create(['category_id' => 6, 'name' => 'Window & Blinds Repair', 'description' => 'Repairing windows and blinds']);
        Service::create(['category_id' => 6, 'name' => 'Flooring & Tiling Help', 'description' => 'Help with flooring and tiling']);
        Service::create(['category_id' => 6, 'name' => 'Electrical Help', 'description' => 'Electrical repair services']);
        Service::create(['category_id' => 6, 'name' => 'Plumbing Help', 'description' => 'Plumbing repair services']);
        Service::create(['category_id' => 6, 'name' => 'Light Carpentry', 'description' => 'Light carpentry services']);

        // Painting Services
        Service::create(['category_id' => 7, 'name' => 'Indoor Painting', 'description' => 'Indoor painting services']);
        Service::create(['category_id' => 7, 'name' => 'Wallpapering', 'description' => 'Wallpapering services']);
        Service::create(['category_id' => 7, 'name' => 'Outdoor Painting', 'description' => 'Outdoor painting services']);
        Service::create(['category_id' => 7, 'name' => 'Concrete & Brick Painting', 'description' => 'Painting concrete and brick surfaces']);
        Service::create(['category_id' => 7, 'name' => 'Accent Wall Painting', 'description' => 'Painting accent walls']);
        Service::create(['category_id' => 7, 'name' => 'Wallpaper Removal', 'description' => 'Removing wallpaper']);
    }
}
