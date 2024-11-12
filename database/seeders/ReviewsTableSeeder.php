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

        Review::create(['user_id' => 10, 'store_id' => 1, 'review' => 'The store was perfect.', 'rating' => 4.5,]);
        Review::create(['user_id' => 11, 'store_id' => 1, 'review' => 'The store was perfect.', 'rating' => 4.4,]);
        Review::create(['user_id' => 12, 'store_id' => 1, 'review' => 'The store was perfect.', 'rating' => 4.6,]);
        Review::create(['user_id' => 13, 'store_id' => 1, 'review' => 'The store was perfect.', 'rating' => 4.7,]);
        Review::create(['user_id' => 14, 'store_id' => 1, 'review' => 'The store was perfect.', 'rating' => 4.5,]);
        Review::create(['user_id' => 15, 'store_id' => 1, 'review' => 'The store was perfect.', 'rating' => 5,]);


        Review::create(['user_id' => 7, 'store_id' => 2, 'review' => 'Good store with nice options.', 'rating' => 4.3]);
        Review::create(['user_id' => 8, 'store_id' => 2, 'review' => 'Good store with nice options.', 'rating' => 4.2]);
        Review::create(['user_id' => 9, 'store_id' => 2, 'review' => 'Good store with nice options.', 'rating' => 4.6]);
        Review::create(['user_id' => 10, 'store_id' => 2, 'review' => 'Good store with nice options.', 'rating' => 4.4]);
        Review::create(['user_id' => 11, 'store_id' => 2, 'review' => 'Good store with nice options.', 'rating' => 4.5]);

        Review::create(['user_id' => 12, 'store_id' => 3, 'review' => 'A decent experience.', 'rating' => 4.2]);
        Review::create(['user_id' => 13, 'store_id' => 3, 'review' => 'A decent experience.', 'rating' => 4.3]);
        Review::create(['user_id' => 14, 'store_id' => 3, 'review' => 'A decent experience.', 'rating' => 4.1]);
        Review::create(['user_id' => 15, 'store_id' => 3, 'review' => 'A decent experience.', 'rating' => 4.4]);
        Review::create(['user_id' => 16, 'store_id' => 3, 'review' => 'A decent experience.', 'rating' => 4.5]);

        Review::create(['user_id' => 17, 'store_id' => 4, 'review' => 'Not bad at all.', 'rating' => 4.0]);
        Review::create(['user_id' => 18, 'store_id' => 4, 'review' => 'Not bad at all.', 'rating' => 4.1]);
        Review::create(['user_id' => 19, 'store_id' => 4, 'review' => 'Not bad at all.', 'rating' => 4.3]);
        Review::create(['user_id' => 20, 'store_id' => 4, 'review' => 'Not bad at all.', 'rating' => 4.2]);
        Review::create(['user_id' => 21, 'store_id' => 4, 'review' => 'Not bad at all.', 'rating' => 4.4]);

        Review::create(['user_id' => 22, 'store_id' => 5, 'review' => 'Great value for money.', 'rating' => 4.5]);
        Review::create(['user_id' => 23, 'store_id' => 5, 'review' => 'Great value for money.', 'rating' => 4.6]);
        Review::create(['user_id' => 24, 'store_id' => 5, 'review' => 'Great value for money.', 'rating' => 4.7]);
        Review::create(['user_id' => 25, 'store_id' => 5, 'review' => 'Great value for money.', 'rating' => 4.5]);
        Review::create(['user_id' => 26, 'store_id' => 5, 'review' => 'Great value for money.', 'rating' => 4.6]);

        Review::create(['user_id' => 27, 'store_id' => 6, 'review' => 'Average experience.', 'rating' => 3.9]);
        Review::create(['user_id' => 28, 'store_id' => 6, 'review' => 'Average experience.', 'rating' => 4.0]);
        Review::create(['user_id' => 2, 'store_id' => 6, 'review' => 'Average experience.', 'rating' => 4.1]);
        Review::create(['user_id' => 3, 'store_id' => 6, 'review' => 'Average experience.', 'rating' => 4.2]);
        Review::create(['user_id' => 4, 'store_id' => 6, 'review' => 'Average experience.', 'rating' => 4.3]);

        Review::create(['user_id' => 5, 'store_id' => 7, 'review' => 'Quite satisfying.', 'rating' => 4.4]);
        Review::create(['user_id' => 6, 'store_id' => 7, 'review' => 'Quite satisfying.', 'rating' => 4.3]);
        Review::create(['user_id' => 7, 'store_id' => 7, 'review' => 'Quite satisfying.', 'rating' => 4.5]);
        Review::create(['user_id' => 8, 'store_id' => 7, 'review' => 'Quite satisfying.', 'rating' => 4.6]);
        Review::create(['user_id' => 9, 'store_id' => 7, 'review' => 'Quite satisfying.', 'rating' => 4.2]);

        Review::create(['user_id' => 10, 'store_id' => 8, 'review' => 'Amazing service!', 'rating' => 4.8]);
        Review::create(['user_id' => 11, 'store_id' => 8, 'review' => 'Amazing service!', 'rating' => 4.7]);
        Review::create(['user_id' => 12, 'store_id' => 8, 'review' => 'Amazing service!', 'rating' => 4.6]);
        Review::create(['user_id' => 13, 'store_id' => 8, 'review' => 'Amazing service!', 'rating' => 4.7]);
        Review::create(['user_id' => 14, 'store_id' => 8, 'review' => 'Amazing service!', 'rating' => 4.5]);

        Review::create(['user_id' => 10, 'product_id' => 1, 'review' => 'Exceeded expectations – highly recommend to everyone!', 'rating' => 4.5,]);
        Review::create(['user_id' => 11, 'product_id' => 1, 'review' => 'Great quality, worth every penny!', 'rating' => 4.4,]);
        Review::create(['user_id' => 12, 'product_id' => 1, 'review' => 'Perfectly balanced between quality and price.', 'rating' => 4.6,]);
        Review::create(['user_id' => 13, 'product_id' => 1, 'review' => 'Impressed by the durability and ease of use', 'rating' => 4.7,]);
        Review::create(['user_id' => 14, 'product_id' => 1, 'review' => 'Remarkably reliable, I use it daily', 'rating' => 4.5,]);
        Review::create(['user_id' => 15, 'product_id' => 1, 'review' => 'Better than expected, simple yet effective!', 'rating' => 5,]);

        Review::create(['user_id' => 10, 'product_id' => 2, 'review' => 'Exceeded expectations – highly recommend to everyone!', 'rating' => 4.5,]);
        Review::create(['user_id' => 11, 'product_id' => 2, 'review' => 'Great quality, worth every penny!', 'rating' => 4.4,]);
        Review::create(['user_id' => 12, 'product_id' => 2, 'review' => 'Perfectly balanced between quality and price.', 'rating' => 4.6,]);
        Review::create(['user_id' => 13, 'product_id' => 2, 'review' => 'Impressed by the durability and ease of use', 'rating' => 4.7,]);
        Review::create(['user_id' => 14, 'product_id' => 2, 'review' => 'Remarkably reliable, I use it daily', 'rating' => 4.5,]);
        Review::create(['user_id' => 15, 'product_id' => 2, 'review' => 'Better than expected, simple yet effective!', 'rating' => 5,]);

        Review::create(['user_id' => 10, 'product_id' => 3, 'review' => 'Exceeded expectations – highly recommend to everyone!', 'rating' => 4.5,]);
        Review::create(['user_id' => 11, 'product_id' => 3, 'review' => 'Great quality, worth every penny!', 'rating' => 4.4,]);
        Review::create(['user_id' => 12, 'product_id' => 3, 'review' => 'Perfectly balanced between quality and price.', 'rating' => 4.6,]);
        Review::create(['user_id' => 13, 'product_id' => 3, 'review' => 'Impressed by the durability and ease of use', 'rating' => 4.7,]);
        Review::create(['user_id' => 14, 'product_id' => 3, 'review' => 'Remarkably reliable, I use it daily', 'rating' => 4.5,]);
        Review::create(['user_id' => 15, 'product_id' => 3, 'review' => 'Better than expected, simple yet effective!', 'rating' => 5,]);

        Review::create(['user_id' => 10, 'product_id' => 4, 'review' => 'Exceeded expectations – highly recommend to everyone!', 'rating' => 4.5,]);
        Review::create(['user_id' => 11, 'product_id' => 4, 'review' => 'Great quality, worth every penny!', 'rating' => 4.4,]);
        Review::create(['user_id' => 12, 'product_id' => 4, 'review' => 'Perfectly balanced between quality and price.', 'rating' => 4.6,]);
        Review::create(['user_id' => 13, 'product_id' => 4, 'review' => 'Impressed by the durability and ease of use', 'rating' => 4.7,]);
        Review::create(['user_id' => 14, 'product_id' => 4, 'review' => 'Remarkably reliable, I use it daily', 'rating' => 4.5,]);
        Review::create(['user_id' => 15, 'product_id' => 4, 'review' => 'Better than expected, simple yet effective!', 'rating' => 5,]);

        Review::create(['user_id' => 10, 'product_id' => 5, 'review' => 'Exceeded expectations – highly recommend to everyone!', 'rating' => 4.5,]);
        Review::create(['user_id' => 11, 'product_id' => 5, 'review' => 'Great quality, worth every penny!', 'rating' => 4.4,]);
        Review::create(['user_id' => 12, 'product_id' => 5, 'review' => 'Perfectly balanced between quality and price.', 'rating' => 4.6,]);
        Review::create(['user_id' => 13, 'product_id' => 5, 'review' => 'Impressed by the durability and ease of use', 'rating' => 4.7,]);
        Review::create(['user_id' => 14, 'product_id' => 5, 'review' => 'Remarkably reliable, I use it daily', 'rating' => 4.5,]);
        Review::create(['user_id' => 15, 'product_id' => 5, 'review' => 'Better than expected, simple yet effective!', 'rating' => 5,]);

        Review::create(['user_id' => 10, 'product_id' => 6, 'review' => 'Exceeded expectations – highly recommend to everyone!', 'rating' => 4.5,]);
        Review::create(['user_id' => 11, 'product_id' => 6, 'review' => 'Great quality, worth every penny!', 'rating' => 4.4,]);
        Review::create(['user_id' => 12, 'product_id' => 6, 'review' => 'Perfectly balanced between quality and price.', 'rating' => 4.6,]);
        Review::create(['user_id' => 13, 'product_id' => 6, 'review' => 'Impressed by the durability and ease of use', 'rating' => 4.7,]);
        Review::create(['user_id' => 14, 'product_id' => 6, 'review' => 'Remarkably reliable, I use it daily', 'rating' => 4.5,]);
        Review::create(['user_id' => 15, 'product_id' => 6, 'review' => 'Better than expected, simple yet effective!', 'rating' => 5,]);

        Review::create(['user_id' => 10, 'handyman_id' => 1, 'review' => 'Incredibly professional and efficient! Completed the job perfectly and left everything spotless. Highly recommend for any home repairs.', 'rating' => 4.5,]);
        Review::create(['user_id' => 11, 'handyman_id' => 1, 'review' => 'Exceptional work and attention to detail. Listened to my needs and went above and beyond to ensure satisfaction.', 'rating' => 4.2,]);
        Review::create(['user_id' => 12, 'handyman_id' => 1, 'review' => 'Very pleased with the service! Arrived on time, was friendly, and handled each task with care and expertise.', 'rating' => 4.6,]);
        Review::create(['user_id' => 13, 'handyman_id' => 1, 'review' => 'Reliable and skillful – fixed everything I needed quickly and explained the work clearly. I’ll definitely call again.', 'rating' => 4.7,]);
        Review::create(['user_id' => 14, 'handyman_id' => 1, 'review' => 'Fantastic handyman! Knew exactly what to do and worked quickly without cutting corners. Quality work from start to finish.', 'rating' => 4.5,]);
        Review::create(['user_id' => 15, 'handyman_id' => 1, 'review' => 'Superb service! Completed the job with precision and showed genuine care for the final result. Highly trustworthy.', 'rating' => 5,]);

        Review::create(['user_id' => 10, 'handyman_id' => 2, 'review' => 'Incredibly professional and efficient! Completed the job perfectly and left everything spotless. Highly recommend for any home repairs.', 'rating' => 4.5,]);
        Review::create(['user_id' => 11, 'handyman_id' => 2, 'review' => 'Exceptional work and attention to detail. Listened to my needs and went above and beyond to ensure satisfaction.', 'rating' => 4.4,]);
        Review::create(['user_id' => 12, 'handyman_id' => 2, 'review' => 'Very pleased with the service! Arrived on time, was friendly, and handled each task with care and expertise.', 'rating' => 4.2,]);
        Review::create(['user_id' => 13, 'handyman_id' => 2, 'review' => 'Reliable and skillful – fixed everything I needed quickly and explained the work clearly. I’ll definitely call again.', 'rating' => 4.7,]);
        Review::create(['user_id' => 14, 'handyman_id' => 2, 'review' => 'Fantastic handyman! Knew exactly what to do and worked quickly without cutting corners. Quality work from start to finish.', 'rating' => 4.5,]);
        Review::create(['user_id' => 15, 'handyman_id' => 2, 'review' => 'Superb service! Completed the job with precision and showed genuine care for the final result. Highly trustworthy.', 'rating' => 5,]);

        Review::create(['user_id' => 10, 'handyman_id' => 3, 'review' => 'Incredibly professional and efficient! Completed the job perfectly and left everything spotless. Highly recommend for any home repairs.', 'rating' => 4.5,]);
        Review::create(['user_id' => 11, 'handyman_id' => 3, 'review' => 'Exceptional work and attention to detail. Listened to my needs and went above and beyond to ensure satisfaction.', 'rating' => 4.4,]);
        Review::create(['user_id' => 12, 'handyman_id' => 3, 'review' => 'Very pleased with the service! Arrived on time, was friendly, and handled each task with care and expertise.', 'rating' => 4.6,]);
        Review::create(['user_id' => 13, 'handyman_id' => 3, 'review' => 'Reliable and skillful – fixed everything I needed quickly and explained the work clearly. I’ll definitely call again.', 'rating' => 4.2,]);
        Review::create(['user_id' => 14, 'handyman_id' => 3, 'review' => 'Fantastic handyman! Knew exactly what to do and worked quickly without cutting corners. Quality work from start to finish.', 'rating' => 4.5,]);
        Review::create(['user_id' => 15, 'handyman_id' => 3, 'review' => 'Superb service! Completed the job with precision and showed genuine care for the final result. Highly trustworthy.', 'rating' => 5,]);

        Review::create(['user_id' => 10, 'handyman_id' => 4, 'review' => 'Incredibly professional and efficient! Completed the job perfectly and left everything spotless. Highly recommend for any home repairs.', 'rating' => 4.5,]);
        Review::create(['user_id' => 11, 'handyman_id' => 4, 'review' => 'Exceptional work and attention to detail. Listened to my needs and went above and beyond to ensure satisfaction.', 'rating' => 4.2,]);
        Review::create(['user_id' => 12, 'handyman_id' => 4, 'review' => 'Very pleased with the service! Arrived on time, was friendly, and handled each task with care and expertise.', 'rating' => 4.6,]);
        Review::create(['user_id' => 13, 'handyman_id' => 4, 'review' => 'Reliable and skillful – fixed everything I needed quickly and explained the work clearly. I’ll definitely call again.', 'rating' => 4.8,]);
        Review::create(['user_id' => 14, 'handyman_id' => 4, 'review' => 'Fantastic handyman! Knew exactly what to do and worked quickly without cutting corners. Quality work from start to finish.', 'rating' => 4.5,]);
        Review::create(['user_id' => 15, 'handyman_id' => 4, 'review' => 'Superb service! Completed the job with precision and showed genuine care for the final result. Highly trustworthy.', 'rating' => 5,]);

        Review::create(['user_id' => 10, 'handyman_id' => 5, 'review' => 'Incredibly professional and efficient! Completed the job perfectly and left everything spotless. Highly recommend for any home repairs.', 'rating' => 4.5,]);
        Review::create(['user_id' => 11, 'handyman_id' => 5, 'review' => 'Exceptional work and attention to detail. Listened to my needs and went above and beyond to ensure satisfaction.', 'rating' => 4.4,]);
        Review::create(['user_id' => 12, 'handyman_id' => 5, 'review' => 'Very pleased with the service! Arrived on time, was friendly, and handled each task with care and expertise.', 'rating' => 4.8,]);
        Review::create(['user_id' => 13, 'handyman_id' => 5, 'review' => 'Reliable and skillful – fixed everything I needed quickly and explained the work clearly. I’ll definitely call again.', 'rating' => 4.7,]);
        Review::create(['user_id' => 14, 'handyman_id' => 5, 'review' => 'Fantastic handyman! Knew exactly what to do and worked quickly without cutting corners. Quality work from start to finish.', 'rating' => 4.5,]);
        Review::create(['user_id' => 15, 'handyman_id' => 5, 'review' => 'Superb service! Completed the job with precision and showed genuine care for the final result. Highly trustworthy.', 'rating' => 5,]);

        Review::create(['user_id' => 10, 'handyman_id' => 6, 'review' => 'Incredibly professional and efficient! Completed the job perfectly and left everything spotless. Highly recommend for any home repairs.', 'rating' => 4.5,]);
        Review::create(['user_id' => 11, 'handyman_id' => 6, 'review' => 'Exceptional work and attention to detail. Listened to my needs and went above and beyond to ensure satisfaction.', 'rating' => 4.8,]);
        Review::create(['user_id' => 12, 'handyman_id' => 6, 'review' => 'Very pleased with the service! Arrived on time, was friendly, and handled each task with care and expertise.', 'rating' => 4.6,]);
        Review::create(['user_id' => 13, 'handyman_id' => 6, 'review' => 'Reliable and skillful – fixed everything I needed quickly and explained the work clearly. I’ll definitely call again.', 'rating' => 4.8,]);
        Review::create(['user_id' => 14, 'handyman_id' => 6, 'review' => 'Fantastic handyman! Knew exactly what to do and worked quickly without cutting corners. Quality work from start to finish.', 'rating' => 4.5,]);
        Review::create(['user_id' => 15, 'handyman_id' => 6, 'review' => 'Superb service! Completed the job with precision and showed genuine care for the final result. Highly trustworthy.', 'rating' => 5,]);




        // Add more reviews as needed
    }
}
