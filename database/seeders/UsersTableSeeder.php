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
            'name' => 'Mohammad Ayoub',
            'email' => 'admin@example.com',
            'password' => bcrypt('password'),
            'role_id' => 1, // Assuming role 1 is Admin
            'rating' => 5.0,
            'reported' => false,
            'date_created' => now(),
            'image' => 'sadcat.png',
        ]);

        // Create a regular user
        User::create([
            'name' => 'Ahmad Abdel Ra\'uof',
            'email' => 'user@example.com',
            'password' => bcrypt('password'),
            'role_id' => 2, // Assuming role 2 is User
            'rating' => 4.5,
            'image' => 'sadcat.png',
            'reported' => false,

            'date_created' => now(),
        ]);
        // ///////////////////////////////////////////////////////////////////////////////////////////////////////////////
        User::create([
            'name' => 'Osama Mousa',
            'email' => 'handyman@example.com',
            'password' => bcrypt('password'),
            'role_id' => 4, // Assuming role 2 is User
            'rating' => 4.5,
            'reported' => false,
            'image' => 'AhmedPic.jpg',

            'date_created' => now(),
        ]);

        User::create([
            'name' => 'Omar Ibrahem',
            'email' => 'storeowner@example.com',
            'password' => bcrypt('password'),
            'role_id' => 3, // Assuming role 3 is User
            'rating' => 4.5,
            'reported' => false,
            'image' => 'sadcat.png',

            'date_created' => now(),
        ]);
        // ///////////////////////////////////////////////////////////////////////////////////////////////////////////////

        User::create([
            'name' => 'Zaid Abdulrahman ',
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
            'email' => 'tomybrown@example.com',
            'password' => bcrypt('password123'),
            'role_id' => 4,
            'rating' => 4.9,
            'reported' => false,
            'image' => 'tomPic.jpg',
            'date_created' => now(),
        ]);

        User::create([
            'name' => 'Lucy Davis',
            'email' => 'lucyydavis@example.com',
            'password' => bcrypt('password123'),
            'role_id' => 4,
            'rating' => 4.8,
            'reported' => false,
            'image' => 'LucyPic.jpg',

            'date_created' => now(),
        ]);

        User::create([
            'name' => 'Mark Evans',
            'email' => 'markyevans@example.com',
            'password' => bcrypt('password123'),
            'role_id' => 4,
            'rating' => 4.6,
            'reported' => false,
            'image' => 'MarkPic.jpg',

            'date_created' => now(),
        ]);

        User::create([
            'name' => 'Anna Johnson',
            'email' => 'annayjohnson@example.com',
            'password' => bcrypt('password123'),
            'role_id' => 4,
            'rating' => 4.7,
            'reported' => false,
            'image' => 'AnnaPic.jpg',

            'date_created' => now(),
        ]);

        User::create([
            'name' => 'Ahmed Ali',
            'email' => 'ahmedyali@example.com',
            'password' => bcrypt('password123'),
            'role_id' => 4,
            'rating' => 4.8,
            'reported' => false,
            'image' => 'AhmedPic.jpg',

            'date_created' => now(),
        ]);

        User::create([
            'name' => 'Fadi Hassan',
            'email' => 'fadiyhassan@example.com',
            'password' => bcrypt('password123'),
            'role_id' => 4,
            'rating' => 4.7,
            'reported' => false,
            'image' => 'FadiPic.jpg',

            'date_created' => now(),
        ]);

        User::create([
            'name' => 'guest user',
            'email' => 'guest@example.com',
            'password' => bcrypt('password123'),
            'role_id' => 2,
            'rating' => 4.7,
            'reported' => false,
            'image' => 'FadiPic.jpg',
            'date_created' => now(),
        ]);


        User::create([
            'name' => 'Qutaiba Wasfi',
            'email' => 'qutaiba@example.com',
            'password' => bcrypt('password123'),
            'role_id' => 2,
            'rating' => 4.7,
            'reported' => false,
            'date_created' => now(),
        ]);

        User::create([
            'name' => 'Rafat Mohammad',
            'email' => 'rafat@example.com',
            'password' => bcrypt('password123'),
            'role_id' => 2,
            'rating' => 4.7,
            'reported' => false,
            'date_created' => now(),
        ]);

        User::create([
            'name' => 'Rami Mahmoud',
            'email' => 'rami@example.com',
            'password' => bcrypt('password123'),
            'role_id' => 2,
            'rating' => 4.7,
            'reported' => false,
            'date_created' => now(),
        ]);

        User::create([
            'name' => 'Samer Seran',
            'email' => 'samer@example.com',
            'password' => bcrypt('password123'),
            'role_id' => 2,
            'rating' => 4.7,
            'reported' => false,
            'date_created' => now(),
        ]);

        User::create([
            'name' => 'Tala Amjad',
            'email' => 'tala@example.com',
            'password' => bcrypt('password123'),
            'role_id' => 2,
            'rating' => 4.7,
            'reported' => false,
            'date_created' => now(),
        ]);

        User::create([
            'name' => 'Yazan Haitham',
            'email' => 'yazan@example.com',
            'password' => bcrypt('password123'),
            'role_id' => 2,
            'rating' => 4.7,
            'reported' => false,
            'date_created' => now(),
        ]);

        User::create([
            'name' => 'Yousef Jammal',
            'email' => 'yousef@example.com',
            'password' => bcrypt('password123'),
            'role_id' => 2,
            'rating' => 4.7,
            'reported' => false,
            'date_created' => now(),
        ]);

        User::create([
            'name' => 'Yousef Mustafa',
            'email' => 'yousef@example.com',
            'password' => bcrypt('password123'),
            'role_id' => 2,
            'rating' => 4.7,
            'reported' => false,
            'date_created' => now(),
        ]);

        // Create additional users using a factory
        // User::factory(10)->create(); // Creates 10 dummy users
    }
}
