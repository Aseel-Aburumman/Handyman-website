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
            'reported' => false,
            'date_created' => now(),
        ]);

        // Create a regular user
        User::create([
            'name' => 'Regular User',
            'email' => 'user@example.com',
            'password' => bcrypt('password'),
            'role_id' => 2, // Assuming role 2 is User
            'rating' => 4.5,
            'reported' => false,

            'date_created' => now(),
        ]);
// ///////////////////////////////////////////////////////////////////////////////////////////////////////////////
        User::create([
            'name' => 'Handyman User',
            'email' => 'handyman@example.com',
            'password' => bcrypt('password'),
            'role_id' => 4, // Assuming role 2 is User
            'rating' => 4.5,
            'reported' => false,

            'date_created' => now(),
        ]);

        User::create([
            'name' => 'Store Owner User',
            'email' => 'storeowner@example.com',
            'password' => bcrypt('password'),
            'role_id' => 3, // Assuming role 3 is User
            'rating' => 4.5,
            'reported' => false,

            'date_created' => now(),
        ]);
// ///////////////////////////////////////////////////////////////////////////////////////////////////////////////

        User::create([
            'name' => 'suspended Handyman User',
            'email' => 'suspendedhandyman@example.com',
            'password' => bcrypt('password'),
            'role_id' => 4, // Assuming role 2 is User
            'rating' => 4.5,
            'reported' => true,

            'date_created' => now(),
        ]);

        User::create([
            'name' => 'John Doe',
            'email' => 'johndoe@example.com',
            'password' => bcrypt('password123'),
            'role_id' => 3,
            'rating' => 4.8,
            'reported' => false,
            'date_created' => now(),
        ]);

        User::create([
            'name' => 'Jane Smith',
            'email' => 'janesmith@example.com',
            'password' => bcrypt('password123'),
            'role_id' => 3,
            'rating' => 4.7,
            'reported' => false,
            'date_created' => now(),
        ]);

        User::create([
            'name' => 'Tom Brown',
            'email' => 'tombrown@example.com',
            'password' => bcrypt('password123'),
            'role_id' => 3,
            'rating' => 4.9,
            'reported' => false,
            'date_created' => now(),
        ]);

        User::create([
            'name' => 'Lucy Davis',
            'email' => 'lucydavis@example.com',
            'password' => bcrypt('password123'),
            'role_id' => 3,
            'rating' => 4.8,
            'reported' => false,
            'date_created' => now(),
        ]);

        User::create([
            'name' => 'Mark Evans',
            'email' => 'markevans@example.com',
            'password' => bcrypt('password123'),
            'role_id' => 3,
            'rating' => 4.6,
            'reported' => false,
            'date_created' => now(),
        ]);

        User::create([
            'name' => 'Anna Johnson',
            'email' => 'annajohnson@example.com',
            'password' => bcrypt('password123'),
            'role_id' => 3,
            'rating' => 4.7,
            'reported' => false,
            'date_created' => now(),
        ]);

        User::create([
            'name' => 'Ahmed Ali',
            'email' => 'ahmedali@example.com',
            'password' => bcrypt('password123'),
            'role_id' => 3, // Regular User
            'rating' => 4.8,
            'reported' => false,
            'date_created' => now(),
        ]);

        User::create([
            'name' => 'Fatima Hassan',
            'email' => 'fatimahassan@example.com',
            'password' => bcrypt('password123'),
            'role_id' => 3, // Regular User
            'rating' => 4.7,
            'reported' => false,
            'date_created' => now(),
        ]);

        User::create([
            'name' => 'Omar Khaled',
            'email' => 'omarkhaled@example.com',
            'password' => bcrypt('password123'),
            'role_id' => 3, // Store Owner
            'rating' => 4.9,
            'reported' => false,
            'date_created' => now(),
        ]);

        User::create([
            'name' => 'Aisha Mohammed',
            'email' => 'aishamohammed@example.com',
            'password' => bcrypt('password123'),
            'role_id' => 3,
            'rating' => 4.6,
            'reported' => false,
            'date_created' => now(),
        ]);

        User::create([
            'name' => 'Youssef Ibrahim',
            'email' => 'youssefibrahim@example.com',
            'password' => bcrypt('password123'),
            'role_id' => 3,
            'rating' => 4.7,
            'reported' => false,
            'date_created' => now(),
        ]);

        User::create([
            'name' => 'Bshiti owner',
            'email' => 'Bshiti@example.com',
            'password' => bcrypt('password123'),
            'role_id' => 3,
            'rating' => 4.7,
            'reported' => false,
            'date_created' => now(),
        ]);


        User::create([
            'name' => 'Manaseer owner',
            'email' => 'Manaseer@example.com',
            'password' => bcrypt('password123'),
            'role_id' => 3,
            'rating' => 4.3,
            'reported' => false,
            'date_created' => now(),
        ]);


        User::create([
            'name' => 'Subhi owner',
            'email' => 'Subhi@example.com',
            'password' => bcrypt('password123'),
            'role_id' => 3,
            'rating' => 4.5,
            'reported' => false,
            'date_created' => now(),
        ]);



        User::create([
            'name' => 'Almeimari owner',
            'email' => 'Almeimari@example.com',
            'password' => bcrypt('password123'),
            'role_id' => 3,
            'rating' => 4.7,
            'reported' => false,
            'date_created' => now(),
        ]);


        User::create([
            'name' => 'Jotun owner',
            'email' => 'Jotun@example.com',
            'password' => bcrypt('password123'),
            'role_id' => 3,
            'rating' => 4.0,
            'reported' => false,
            'date_created' => now(),
        ]);


        User::create([
            'name' => 'Lafarge owner',
            'email' => 'Lafarge@example.com',
            'password' => bcrypt('password123'),
            'role_id' => 3,
            'rating' => 4.9,
            'reported' => false,
            'date_created' => now(),
        ]);

        // //////////////////////////////////////////////////////////////////////

        User::create([
            'name' => 'Tom Brown',
            'email' => 'tombrown@example.com',
            'password' => bcrypt('password123'),
            'role_id' => 4,
            'rating' => 4.9,
            'reported' => false,
            'image'=>'tomPic.jpg',
            'date_created' => now(),
        ]);

        User::create([
            'name' => 'Lucy Davis',
            'email' => 'lucydavis@example.com',
            'password' => bcrypt('password123'),
            'role_id' => 4,
            'rating' => 4.8,
            'reported' => false,
            'image'=>'LucyPic.jpg',

            'date_created' => now(),
        ]);

        User::create([
            'name' => 'Mark Evans',
            'email' => 'markevans@example.com',
            'password' => bcrypt('password123'),
            'role_id' => 4,
            'rating' => 4.6,
            'reported' => false,
            'image'=>'MarkPic.jpg',

            'date_created' => now(),
        ]);

        User::create([
            'name' => 'Anna Johnson',
            'email' => 'annajohnson@example.com',
            'password' => bcrypt('password123'),
            'role_id' => 4,
            'rating' => 4.7,
            'reported' => false,
            'image'=>'tomPic.jpg',

            'date_created' => now(),
        ]);

        User::create([
            'name' => 'Ahmed Ali',
            'email' => 'ahmedali@example.com',
            'password' => bcrypt('password123'),
            'role_id' => 4,
            'rating' => 4.8,
            'reported' => false,
            'image'=>'tomPic.jpg',

            'date_created' => now(),
        ]);

        User::create([
            'name' => 'Fatima Hassan',
            'email' => 'fatimahassan@example.com',
            'password' => bcrypt('password123'),
            'role_id' => 4,
            'rating' => 4.7,
            'reported' => false,
            'image'=>'tomPic.jpg',

            'date_created' => now(),
        ]);

        User::create([
            'name' => 'Omar Khaled',
            'email' => 'omarkhaled@example.com',
            'password' => bcrypt('password123'),
            'role_id' => 4,
            'rating' => 4.9,
            'reported' => false,
            'image'=>'tomPic.jpg',

            'date_created' => now(),
        ]);
        // Create additional users using a factory
        // User::factory(10)->create(); // Creates 10 dummy users
    }
}
