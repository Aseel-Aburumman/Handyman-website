<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Review;

class ReviewsTableSeeder extends Seeder
{
    public function run()
    {
        Review::create([
            'user_id' => 2, // Assuming User ID 2 exists
            'handyman_id' => 1, // Assuming Handyman ID 1 exists
            'review' => 'Great service, highly recommend!',
            'rating' => 5,
        ]);

        Review::create([
            'user_id' => 2,
            'store_id' => 1, // Assuming Store ID 1 exists
            'review' => 'Excellent product selection.',
            'rating' => 4,
        ]);

        Review::create([
            'user_id' => 2,
            'product_id' => 1, // Assuming Product ID 1 exists
            'review' => 'The power drill works perfectly.',
            'rating' => 5,
        ]);
        Review::create([
            'user_id' => 3,
            'client_id' => 1,
            'review' => 'The client was perfect.',
            'rating' => 5,
        ]);
        // Add more reviews as needed
    }
}
