<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        // Create an admin user
        User::create([
            'name' => 'Admin User',
            'email' => 'admin@example.com',
            'password' => bcrypt('password'),
            'role_id' => 1, // Assuming role 1 is Admin
            'rating' => 5.0,
            'date_created' => now(),
        ]);

        // Create a regular user
        User::create([
            'name' => 'Regular User',
            'email' => 'user@example.com',
            'password' => bcrypt('password'),
            'role_id' => 2, // Assuming role 2 is User
            'rating' => 4.5,
            'date_created' => now(),
        ]);

        User::create([
            'name' => 'Handyman User',
            'email' => 'handyman@example.com',
            'password' => bcrypt('password'),
            'role_id' => 4, // Assuming role 2 is User
            'rating' => 4.5,
            'date_created' => now(),
        ]);

        User::create([
            'name' => 'Store Owner User',
            'email' => 'storeowner@example.com',
            'password' => bcrypt('password'),
            'role_id' => 3, // Assuming role 3 is User
            'rating' => 4.5,
            'date_created' => now(),
        ]);

        // Create additional users using a factory
        // User::factory(10)->create(); // Creates 10 dummy users
    }
}
