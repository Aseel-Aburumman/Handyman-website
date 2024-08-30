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
            'is_read' => false,
        ]);
        // Add more notifications as needed
    }
}
