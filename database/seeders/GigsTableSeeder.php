<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Gig;
use App\Models\HandymanAvailability;
use Carbon\Carbon;

class GigsTableSeeder extends Seeder
{
    public function run()
    {
        $gigs = [

            // Handyman 1
            [
                'user_id' => 10,
                'handyman_id' => 1,
                'category_id' => 1,
                'service_id' => 1,
                'title' => 'Assemble a Large Bookshelf',
                'description' => 'Require assistance with assembling a large bookshelf in the living room.',
                'location' => '456 Oak Lane',
                'estimated_time' => 3,
                'price' => 60,
                'task_date' => '2024-11-02',
                'task_time' => '09:00:00',
                'total' => 180,
                'status_id' => 9,
            ],

            [
                'user_id' => 11,
                'handyman_id' => 1,
                'category_id' => 1,
                'service_id' => 2,
                'title' => 'Expert IKEA Bed Assembly',
                'description' => 'Need help assembling an IKEA bed with intricate design specifications.',
                'location' => '789 Pine Street',
                'estimated_time' => 4,
                'price' => 75,
                'task_date' => '2024-11-04',
                'task_time' => '10:30:00',
                'total' => 300,
                'status_id' => 9,
            ],

            [
                'user_id' => 12,
                'handyman_id' => 1,
                'category_id' => 2,
                'service_id' => 7,
                'title' => 'Mount Mirrors and Artwork',
                'description' => 'Looking for someone to mount several mirrors and art pieces around the house.',
                'location' => '23 Maple Ave',
                'estimated_time' => 2,
                'price' => 50,
                'task_date' => '2024-11-06',
                'task_time' => '13:00:00',
                'total' => 100,
                'status_id' => 9,
            ],

            [
                'user_id' => 13,
                'handyman_id' => 1,
                'category_id' => 3,
                'service_id' => 19,
                'title' => 'Help with Heavy Furniture Moving',
                'description' => 'Require assistance moving heavy furniture items within the house.',
                'location' => '82 Birch Blvd',
                'estimated_time' => 5,
                'price' => 120,
                'task_date' => '2024-11-08',
                'task_time' => '14:00:00',
                'total' => 600,
                'status_id' => 9,
            ],

            [
                'user_id' => 14,
                'handyman_id' => 1,
                'category_id' => 4,
                'service_id' => 27,
                'title' => 'Deep Clean of Apartment',
                'description' => 'In need of a deep cleaning for a two-bedroom apartment.',
                'location' => '123 Main St',
                'estimated_time' => 6,
                'price' => 100,
                'task_date' => '2024-11-10',
                'task_time' => '08:30:00',
                'total' => 600,
                'status_id' => 9,
            ],

            // Handyman 2

            [
                'user_id' => 15,
                'handyman_id' => 2,
                'category_id' => 1,
                'service_id' => 5,
                'title' => 'Custom Bookshelf Assembly',
                'description' => 'Require assistance with assembling a custom-made bookshelf.',
                'location' => '789 Willow Street',
                'estimated_time' => 3,
                'price' => 75,
                'task_date' => '2024-11-03',
                'task_time' => '09:30:00',
                'total' => 225,
                'status_id' => 9,
            ],

            [
                'user_id' => 10,
                'handyman_id' => 2,
                'category_id' => 2,
                'service_id' => 9,
                'title' => 'Install Window Blinds',
                'description' => 'Need blinds installed in two bedrooms and the living room.',
                'location' => '456 Maple Drive',
                'estimated_time' => 4,
                'price' => 85,
                'task_date' => '2024-11-05',
                'task_time' => '11:30:00',
                'total' => 340,
                'status_id' => 9,
            ],

            [
                'user_id' => 11,
                'handyman_id' => 2,
                'category_id' => 3,
                'service_id' => 20,
                'title' => 'Load Furniture for Moving',
                'description' => 'Assistance required for loading large furniture items into a moving truck.',
                'location' => '82 Oak Blvd',
                'estimated_time' => 5,
                'price' => 120,
                'task_date' => '2024-11-07',
                'task_time' => '10:00:00',
                'total' => 600,
                'status_id' => 9,
            ],

            [
                'user_id' => 12,
                'handyman_id' => 2,
                'category_id' => 5,
                'service_id' => 32,
                'title' => 'Lawn Care and Maintenance',
                'description' => 'Need lawn mowing and trimming of bushes in front yard.',
                'location' => '65 Birch Lane',
                'estimated_time' => 3,
                'price' => 70,
                'task_date' => '2024-11-09',
                'task_time' => '15:00:00',
                'total' => 210,
                'status_id' => 9,
            ],

            [
                'user_id' => 13,
                'handyman_id' => 2,
                'category_id' => 6,
                'service_id' => 37,
                'title' => 'Cabinet Door Repair',
                'description' => 'Need repair for a loose kitchen cabinet door hinge.',
                'location' => '98 Pine Street',
                'estimated_time' => 2,
                'price' => 60,
                'task_date' => '2024-11-11',
                'task_time' => '08:00:00',
                'total' => 120,
                'status_id' => 9,
            ],

            // Handyman 3
            [
                'user_id' => 14,
                'handyman_id' => 3,
                'category_id' => 2,
                'service_id' => 8,
                'title' => 'Mount Artwork in Office',
                'description' => 'Looking to mount various artwork pieces throughout the office.',
                'location' => '36 Elm Drive',
                'estimated_time' => 3,
                'price' => 55,
                'task_date' => '2024-11-12',
                'task_time' => '09:00:00',
                'total' => 165,
                'status_id' => 9,
            ],

            [
                'user_id' => 15,
                'handyman_id' => 3,
                'category_id' => 4,
                'service_id' => 28,
                'title' => 'Post-Event Cleanup',
                'description' => 'Need a thorough cleanup after a large gathering in the backyard.',
                'location' => '456 Cedar Road',
                'estimated_time' => 5,
                'price' => 90,
                'task_date' => '2024-11-13',
                'task_time' => '10:30:00',
                'total' => 450,
                'status_id' => 9,
            ],

            [
                'user_id' => 10,
                'handyman_id' => 3,
                'category_id' => 5,
                'service_id' => 35,
                'title' => 'Trim Trees and Hedges',
                'description' => 'Need assistance trimming trees and shaping hedges around the garden.',
                'location' => '123 Pine Grove',
                'estimated_time' => 4,
                'price' => 95,
                'task_date' => '2024-11-14',
                'task_time' => '13:00:00',
                'total' => 380,
                'status_id' => 9,
            ],

            [
                'user_id' => 11,
                'handyman_id' => 3,
                'category_id' => 7,
                'service_id' => 47,
                'title' => 'Repaint Bedroom Walls',
                'description' => 'Need fresh coat of paint in the bedroom to cover old color.',
                'location' => '124 Maple Lane',
                'estimated_time' => 6,
                'price' => 100,
                'task_date' => '2024-11-15',
                'task_time' => '15:30:00',
                'total' => 600,
                'status_id' => 9,
            ],

            [
                'user_id' => 12,
                'handyman_id' => 4,
                'category_id' => 3,
                'service_id' => 18,
                'title' => 'Help Moving Heavy Furniture',
                'description' => 'Assistance needed to move heavy furniture items to storage.',
                'location' => '78 Oak Avenue',
                'estimated_time' => 4,
                'price' => 80,
                'task_date' => '2024-11-02',
                'task_time' => '08:00:00',
                'total' => 320,
                'status_id' => 9,
            ],

            [
                'user_id' => 13,
                'handyman_id' => 4,
                'category_id' => 6,
                'service_id' => 38,
                'title' => 'Fix Broken Door Hinge',
                'description' => 'Need a handyman to repair or replace a broken hinge on the main door.',
                'location' => '45 Willow St',
                'estimated_time' => 2,
                'price' => 60,
                'task_date' => '2024-11-04',
                'task_time' => '09:30:00',
                'total' => 120,
                'status_id' => 9,
            ],

            [
                'user_id' => 14,
                'handyman_id' => 4,
                'category_id' => 7,
                'service_id' => 47,
                'title' => 'Interior Wall Painting',
                'description' => 'Requesting painting services to refresh the living room walls.',
                'location' => '123 Cedar Blvd',
                'estimated_time' => 5,
                'price' => 85,
                'task_date' => '2024-11-06',
                'task_time' => '11:00:00',
                'total' => 425,
                'status_id' => 9,
            ],

            [
                'user_id' => 15,
                'handyman_id' => 4,
                'category_id' => 5,
                'service_id' => 34,
                'title' => 'Snow Removal from Driveway',
                'description' => 'Need to clear snow from driveway and walkways after snowfall.',
                'location' => '456 Elm Road',
                'estimated_time' => 3,
                'price' => 75,
                'task_date' => '2024-11-08',
                'task_time' => '14:30:00',
                'total' => 225,
                'status_id' => 9,
            ],

            [
                'user_id' => 10,
                'handyman_id' => 4,
                'category_id' => 4,
                'service_id' => 29,
                'title' => 'Apartment Move-Out Cleaning',
                'description' => 'Need a full cleaning for the apartment before moving out.',
                'location' => '789 Pine Grove',
                'estimated_time' => 6,
                'price' => 100,
                'task_date' => '2024-11-10',
                'task_time' => '08:30:00',
                'total' => 600,
                'status_id' => 9,
            ],

            // Handyman 5
            [
                'user_id' => 11,
                'handyman_id' => 5,
                'category_id' => 2,
                'service_id' => 9,
                'title' => 'Install Blinds in Living Room',
                'description' => 'Looking for a professional to install blinds in the living room.',
                'location' => '123 Maple Street',
                'estimated_time' => 3,
                'price' => 65,
                'task_date' => '2024-11-12',
                'task_time' => '09:30:00',
                'total' => 195,
                'status_id' => 9,
            ],

            [
                'user_id' => 12,
                'handyman_id' => 5,
                'category_id' => 3,
                'service_id' => 18,
                'title' => 'Furniture Rearrangement Assistance',
                'description' => 'Require help to rearrange furniture in multiple rooms.',
                'location' => '56 Willow Way',
                'estimated_time' => 4,
                'price' => 80,
                'task_date' => '2024-11-13',
                'task_time' => '10:00:00',
                'total' => 320,
                'status_id' => 9,
            ],

            [
                'user_id' => 13,
                'handyman_id' => 5,
                'category_id' => 7,
                'service_id' => 47,
                'title' => 'Painting Job in Kitchen',
                'description' => 'Looking to refresh the kitchen walls with a new paint color.',
                'location' => '34 Cedar Avenue',
                'estimated_time' => 5,
                'price' => 90,
                'task_date' => '2024-11-15',
                'task_time' => '11:30:00',
                'total' => 450,
                'status_id' => 9,
            ],

            [
                'user_id' => 14,
                'handyman_id' => 5,
                'category_id' => 1,
                'service_id' => 4,
                'title' => 'Assemble PAX Wardrobe',
                'description' => 'Require assistance to assemble a large PAX wardrobe in the bedroom.',
                'location' => '98 Elm Boulevard',
                'estimated_time' => 4,
                'price' => 85,
                'task_date' => '2024-11-17',
                'task_time' => '14:00:00',
                'total' => 340,
                'status_id' => 9,
            ],

            [
                'user_id' => 15,
                'handyman_id' => 5,
                'category_id' => 5,
                'service_id' => 32,
                'title' => 'Yard Cleanup and Maintenance',
                'description' => 'Need help with yard maintenance, including raking leaves and trimming bushes.',
                'location' => '123 Oak Lane',
                'estimated_time' => 4,
                'price' => 80,
                'task_date' => '2024-11-18',
                'task_time' => '08:00:00',
                'total' => 320,
                'status_id' => 9,
            ],
            // Handyman 6
            [
                'user_id' => 10,
                'handyman_id' => 6,
                'category_id' => 6,
                'service_id' => 40,
                'title' => 'Repair Window Blinds',
                'description' => 'Fix broken blinds in the living room and bedroom.',
                'location' => '456 Pine Drive',
                'estimated_time' => 2,
                'price' => 50,
                'task_date' => '2024-11-14',
                'task_time' => '09:00:00',
                'total' => 100,
                'status_id' => 9,
            ],

            [
                'user_id' => 11,
                'handyman_id' => 6,
                'category_id' => 7,
                'service_id' => 48,
                'title' => 'Paint Living Room Walls',
                'description' => 'Repaint living room with a new color scheme.',
                'location' => '78 Willow Avenue',
                'estimated_time' => 5,
                'price' => 100,
                'task_date' => '2024-11-16',
                'task_time' => '10:30:00',
                'total' => 500,
                'status_id' => 9,
            ],

            [
                'user_id' => 12,
                'handyman_id' => 6,
                'category_id' => 5,
                'service_id' => 33,
                'title' => 'Winter Yard Prep and Cleanup',
                'description' => 'Prepare yard for winter by clearing leaves and trimming plants.',
                'location' => '82 Maple Grove',
                'estimated_time' => 3,
                'price' => 75,
                'task_date' => '2024-11-18',
                'task_time' => '13:00:00',
                'total' => 225,
                'status_id' => 9,
            ],

            [
                'user_id' => 13,
                'handyman_id' => 6,
                'category_id' => 4,
                'service_id' => 30,
                'title' => 'Deep Clean After Party',
                'description' => 'Thorough cleaning required after a large event in the home.',
                'location' => '654 Oak Avenue',
                'estimated_time' => 6,
                'price' => 100,
                'task_date' => '2024-11-19',
                'task_time' => '14:00:00',
                'total' => 600,
                'status_id' => 9,
            ],

            [
                'user_id' => 14,
                'handyman_id' => 6,
                'category_id' => 3,
                'service_id' => 21,
                'title' => 'Furniture Relocation Assistance',
                'description' => 'Help required to move furniture within the house for redecoration.',
                'location' => '123 Cedar Street',
                'estimated_time' => 5,
                'price' => 85,
                'task_date' => '2024-11-20',
                'task_time' => '15:30:00',
                'total' => 425,
                'status_id' => 9,
            ],

            [
                'user_id' => 15,
                'handyman_id' => 6,
                'category_id' => 1,
                'service_id' => 1,
                'title' => 'Assemble a Large Bookshelf',
                'description' => 'Require assistance with assembling a large bookshelf in the living room.',
                'location' => '456 Oak Lane',
                'estimated_time' => 3,
                'price' => 60,
                'task_date' => '2024-11-02',
                'task_time' => '09:00:00',
                'total' => 180,
                'status_id' => 9,
            ],







            [
                'user_id' => 2,
                'handyman_id' => 1,
                'category_id' => 1,
                'service_id' => 1,
                'title' => 'Fix leaky faucet',
                'description' => 'Need a handyman to fix a leaky faucet in the kitchen.',
                'location' => '123 Main St',
                'estimated_time' => 2,
                'price' => 50,
                'task_date' => '2024-10-05',
                'task_time' => '08:30:00',
                'total' => '100',
                'status_id' => 7,
            ],

        ];
        foreach ($gigs as $gigData) {
            $gig = Gig::create($gigData);
            $this->syncHandymanAvailability($gig);
        }
        // }
        // Sync availability for the newly created gig
        // $this->syncHandymanAvailability($gig);

        // Create more gigs using the factory and sync availability for each
        Gig::factory()->count(50)->create()->each(function ($gig) {
            $this->syncHandymanAvailability($gig);
        });
    }

    private function syncHandymanAvailability($gig)
    {
        // Convert task_date and task_time to a Carbon datetime object
        $startTime = Carbon::parse($gig->task_date . ' ' . $gig->task_time);

        // Calculate end time by adding the estimated time (in hours)
        $endTime = $startTime->copy()->addHours($gig->estimated_time);

        // Insert the handyman's availability based on this gig
        HandymanAvailability::create([
            'handyman_id' => $gig->handyman_id,
            'start_time' => $startTime,
            'end_time' => $endTime,
        ]);
    }
}
