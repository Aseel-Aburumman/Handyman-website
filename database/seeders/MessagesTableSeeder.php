<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Message;

class MessagesTableSeeder extends Seeder
{
    public function run()
    {
        Message::create([
            'sender_id' => 2, // Assuming User ID 2 exists
            'receiver_id' => 1, // Assuming User ID 1 exists
            'message_content' => 'Hello, I need help with a product.',
            'is_read' => false,
        ]);
        // Add more messages as needed
    }
}
