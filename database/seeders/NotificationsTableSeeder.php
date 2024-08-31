<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Notification;

class NotificationsTableSeeder extends Seeder
{
    public function run()
    {
        Notification::create([
            'user_id' => 2, // Assuming User ID 2 exists
            'message' => 'Your order has been shipped!',
            'category' => 'primary',
            'is_read' => false,
        ]);
        // warning,primary, success, danger

        Notification::create([
            'user_id' => 2, // Assuming User ID 2 exists
            'message' => 'Your order has been shipped!',
            'category' => 'warning',
            'is_read' => false,
        ]);

        Notification::create([
            'user_id' => 2, // Assuming User ID 2 exists
            'message' => 'Your order has been shipped!',
            'category' => 'success',
            'is_read' => false,
        ]);

        Notification::create([
            'user_id' => 2, // Assuming User ID 2 exists
            'message' => 'Your order has been shipped!',
            'category' => 'danger',
            'is_read' => false,
        ]);

        Notification::create([
            'user_id' => 3, // Assuming User ID 2 exists
            'message' => 'You win the gig!',
            'category' => 'primary',
            'is_read' => false,
        ]);
        Notification::create([
            'user_id' => 3, // Assuming User ID 2 exists
            'message' => 'You win the gig!',
            'category' => 'danger',
            'is_read' => false,
        ]);
        Notification::create([
            'user_id' => 3, // Assuming User ID 2 exists
            'message' => 'You win the gig!',
            'category' => 'success',
            'is_read' => false,
        ]);
        Notification::create([
            'user_id' => 3, // Assuming User ID 2 exists
            'message' => 'You win the gig!',
            'category' => 'warning',
            'is_read' => false,
        ]);

        Notification::create([
            'user_id' => 1, // Assuming User ID 2 exists
            'message' => 'an order has been shipped!',
            'category' => 'primary',
            'is_read' => false,
        ]);

        Notification::create([
            'user_id' => 1, // Assuming User ID 2 exists
            'message' => 'an gig has a propblem!',
            'category' => 'success',
            'is_read' => false,
        ]);
        Notification::create([
            'user_id' => 1, // Assuming User ID 2 exists
            'message' => 'an order has been shipped!',
            'category' => 'danger',
            'is_read' => false,
        ]);

        Notification::create([
            'user_id' => 1, // Assuming User ID 2 exists
            'message' => 'an gig has a propblem!',
            'category' => 'warning',
            'is_read' => false,
        ]);

        Notification::create([
            'user_id' => 4, // Assuming User ID 2 exists
            'message' => 'Your order has been shipped!',
            'category' => 'primary',
            'is_read' => false,
        ]);

        Notification::create([
            'user_id' => 4, // Assuming User ID 2 exists
            'message' => 'Your order has been shipped!',
            'category' => 'danger',
            'is_read' => false,
        ]);
        Notification::create([
            'user_id' => 4, // Assuming User ID 2 exists
            'message' => 'Your order has been shipped!',
            'category' => 'success',
            'is_read' => false,
        ]);
        Notification::create([
            'user_id' => 4, // Assuming User ID 2 exists
            'message' => 'Your order has been shipped!',
            'category' => 'warning',
            'is_read' => false,
        ]);
        // Add more notifications as needed
    }
}
