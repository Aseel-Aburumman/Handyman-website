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
            'rating' => 0,
            'reported' => false,
            'date_created' => now(),
            'image' => 'user_image1.jpg',
        ]);

        // Create a regular user
        User::create([
            'name' => 'Ahmad Abdel Ra\'uof',
            'email' => 'user@example.com',
            'password' => bcrypt('password'),
            'role_id' => 2, // Assuming role 2 is User
            'rating' => 0,
            'image' => 'user_image2.jpg',
            'reported' => false,

            'date_created' => now(),
        ]);
        // ///////////////////////////////////////////////////////////////////////////////////////////////////////////////
        User::create([
            'name' => 'Osama Mousa',
            'email' => 'handyman@example.com',
            'password' => bcrypt('password'),
            'role_id' => 4, // Assuming role 2 is User
            'rating' => 0,
            'reported' => false,
            'image' => 'AhmedPic.jpg',

            'date_created' => now(),
        ]);

        User::create([
            'name' => 'Omar Ibrahem',
            'email' => 'storeowner@example.com',
            'password' => bcrypt('password'),
            'role_id' => 3, // Assuming role 3 is User
            'rating' => 0,
            'reported' => false,
            'image' => 'user_image3.jpg',

            'date_created' => now(),
        ]);
        // ///////////////////////////////////////////////////////////////////////////////////////////////////////////////

        User::create([
            'name' => 'Zaid Abdulrahman ',
            'email' => 'suspendedhandyman@example.com',
            'password' => bcrypt('password'),
            'role_id' => 4, // Assuming role 2 is User
            'rating' => 0,
            'reported' => true,
            'image' => 'user_image1.jpg',

            'date_created' => now(),
        ]);

        User::create([
            'name' => 'John Doe',
            'email' => 'johndoe@example.com',
            'password' => bcrypt('password123'),
            'role_id' => 3,
            'rating' => 0,
            'reported' => false,
            'image' => 'user_image2.jpg',

            'date_created' => now(),
        ]);

        User::create([
            'name' => 'Jane Smith',
            'email' => 'janesmith@example.com',
            'password' => bcrypt('password123'),
            'role_id' => 3,
            'rating' => 0,
            'reported' => false,
            'image' => 'user_image3.jpg',

            'date_created' => now(),
        ]);

        User::create([
            'name' => 'Tom Brown',
            'email' => 'tombrown@example.com',
            'password' => bcrypt('password123'),
            'role_id' => 3,
            'rating' => 0,
            'image' => 'user_image4.jpg',
            'reported' => false,
            'date_created' => now(),
        ]);

        User::create([
            'name' => 'Lucy Davis',
            'email' => 'lucydavis@example.com',
            'password' => bcrypt('password123'),
            'role_id' => 3,
            'rating' => 0,
            'image' => 'user_image5.jpg',
            'reported' => false,
            'date_created' => now(),
        ]);

        User::create([
            'name' => 'Mark Evans',
            'email' => 'markevans@example.com',
            'password' => bcrypt('password123'),
            'role_id' => 3,
            'rating' => 0,
            'reported' => false,
            'image' => 'user_image6.jpg',
            'date_created' => now(),
        ]);

        User::create([
            'name' => 'Anna Johnson',
            'email' => 'annajohnson@example.com',
            'password' => bcrypt('password123'),
            'role_id' => 3,
            'image' => 'user_image7.jpg',
            'rating' => 0,
            'reported' => false,
            'date_created' => now(),
        ]);

        User::create([
            'name' => 'Ahmed Ali',
            'email' => 'ahmedali@example.com',
            'password' => bcrypt('password123'),
            'role_id' => 3, // Regular User
            'rating' => 0,
            'image' => 'user_image8.jpg',
            'reported' => false,
            'date_created' => now(),
        ]);

        User::create([
            'name' => 'Fatima Hassan',
            'email' => 'fatimahassan@example.com',
            'password' => bcrypt('password123'),
            'role_id' => 3, // Regular User
            'rating' => 0,
            'image' => 'user_image9.jpg',
            'reported' => false,
            'date_created' => now(),
        ]);

        User::create([
            'name' => 'Omar Khaled',
            'email' => 'omarkhaled@example.com',
            'password' => bcrypt('password123'),
            'role_id' => 3, // Store Owner
            'rating' => 0,
            'image' => 'user_image10.jpg',
            'reported' => false,
            'date_created' => now(),
        ]);

        User::create([
            'name' => 'Aisha Mohammed',
            'email' => 'aishamohammed@example.com',
            'password' => bcrypt('password123'),
            'role_id' => 3,
            'rating' => 0,
            'image' => 'user_image11.jpg',
            'reported' => false,
            'date_created' => now(),
        ]);

        User::create([
            'name' => 'Youssef Ibrahim',
            'email' => 'youssefibrahim@example.com',
            'password' => bcrypt('password123'),
            'role_id' => 3,
            'rating' => 0,
            'image' => 'user_image12.jpg',
            'reported' => false,
            'date_created' => now(),
        ]);

        User::create([
            'name' => 'Bshiti owner',
            'email' => 'Bshiti@example.com',
            'password' => bcrypt('password123'),
            'role_id' => 3,
            'rating' => 0,
            'image' => 'user_image13.jpg',
            'reported' => false,
            'date_created' => now(),
        ]);


        User::create([
            'name' => 'Manaseer owner',
            'email' => 'Manaseer@example.com',
            'password' => bcrypt('password123'),
            'role_id' => 3,
            'rating' => 0,
            'image' => 'user_image14.jpg',
            'reported' => false,
            'date_created' => now(),
        ]);


        User::create([
            'name' => 'Subhi owner',
            'email' => 'Subhi@example.com',
            'password' => bcrypt('password123'),
            'role_id' => 3,
            'rating' => 0,
            'image' => 'user_image15.jpg',
            'reported' => false,
            'date_created' => now(),
        ]);



        User::create([
            'name' => 'Almeimari owner',
            'email' => 'Almeimari@example.com',
            'password' => bcrypt('password123'),
            'role_id' => 3,
            'rating' => 0,
            'image' => 'user_image1.jpg',
            'reported' => false,
            'date_created' => now(),
        ]);


        User::create([
            'name' => 'Jotun owner',
            'email' => 'Jotun@example.com',
            'password' => bcrypt('password123'),
            'role_id' => 3,
            'rating' => 0,
            'image' => 'user_image2.jpg',
            'reported' => false,
            'date_created' => now(),
        ]);


        User::create([
            'name' => 'Lafarge owner',
            'email' => 'Lafarge@example.com',
            'password' => bcrypt('password123'),
            'image' => 'user_image3.jpg',
            'role_id' => 3,
            'rating' => 0,
            'reported' => false,
            'date_created' => now(),
        ]);

        // //////////////////////////////////////////////////////////////////////

        User::create([
            'name' => 'Tom Brown',
            'email' => 'tomybrown@example.com',
            'password' => bcrypt('password123'),
            'role_id' => 4,
            'rating' => 0,
            'reported' => false,
            'image' => 'tomPic.jpg',
            'date_created' => now(),
        ]);

        User::create([
            'name' => 'Lucy Davis',
            'email' => 'lucyydavis@example.com',
            'password' => bcrypt('password123'),
            'role_id' => 4,
            'rating' => 0,
            'reported' => false,
            'image' => 'LucyPic.jpg',

            'date_created' => now(),
        ]);

        User::create([
            'name' => 'Mark Evans',
            'email' => 'markyevans@example.com',
            'password' => bcrypt('password123'),
            'role_id' => 4,
            'rating' => 0,
            'reported' => false,
            'image' => 'MarkPic.jpg',

            'date_created' => now(),
        ]);

        User::create([
            'name' => 'Anna Johnson',
            'email' => 'annayjohnson@example.com',
            'password' => bcrypt('password123'),
            'role_id' => 4,
            'rating' => 0,
            'reported' => false,
            'image' => 'AnnaPic.jpg',

            'date_created' => now(),
        ]);

        User::create([
            'name' => 'Ahmed Ali',
            'email' => 'ahmedyali@example.com',
            'password' => bcrypt('password123'),
            'role_id' => 4,
            'rating' => 0,
            'reported' => false,
            'image' => 'AhmedPic.jpg',

            'date_created' => now(),
        ]);

        User::create([
            'name' => 'Fadi Hassan',
            'email' => 'fadiyhassan@example.com',
            'password' => bcrypt('password123'),
            'role_id' => 4,
            'rating' => 0,
            'reported' => false,
            'image' => 'FadiPic.jpg',

            'date_created' => now(),
        ]);

        User::create([
            'name' => 'guest user',
            'email' => 'guest@example.com',
            'password' => bcrypt('password123'),
            'role_id' => 2,
            'rating' => 0,
            'reported' => false,
            'image' => 'FadiPic.jpg',
            'date_created' => now(),
        ]);


        User::create([
            'name' => 'Qutaiba Wasfi',
            'email' => 'qutaiba@example.com',
            'password' => bcrypt('password123'),
            'role_id' => 2,
            'rating' => 0,
            'image' => 'user_image4.jpg',
            'reported' => false,
            'date_created' => now(),
        ]);

        User::create([
            'name' => 'Rafat Mohammad',
            'email' => 'rafat@example.com',
            'password' => bcrypt('password123'),
            'role_id' => 2,
            'image' => 'user_image5.jpg',
            'rating' => 0,
            'reported' => false,
            'date_created' => now(),
        ]);

        User::create([
            'name' => 'Rami Mahmoud',
            'email' => 'rami@example.com',
            'password' => bcrypt('password123'),
            'image' => 'user_image6.jpg',
            'role_id' => 2,
            'rating' => 0,
            'reported' => false,
            'date_created' => now(),
        ]);

        User::create([
            'name' => 'Samer Seran',
            'email' => 'samer@example.com',
            'password' => bcrypt('password123'),
            'image' => 'user_image7.jpg',
            'role_id' => 2,
            'rating' => 0,
            'reported' => false,
            'date_created' => now(),
        ]);

        User::create([
            'name' => 'Tala Amjad',
            'email' => 'tala@example.com',
            'password' => bcrypt('password123'),
            'image' => 'user_image8.jpg',
            'role_id' => 2,
            'rating' => 0,
            'reported' => false,
            'date_created' => now(),
        ]);

        User::create([
            'name' => 'Yazan Haitham',
            'email' => 'yazan@example.com',
            'password' => bcrypt('password123'),
            'image' => 'user_image9.jpg',
            'role_id' => 2,
            'rating' => 0,
            'reported' => false,
            'date_created' => now(),
        ]);

        User::create([
            'name' => 'Yousef Jammal',
            'email' => 'yousef@example.com',
            'password' => bcrypt('password123'),
            'role_id' => 2,
            'image' => 'user_image10.jpg',
            'rating' => 0,
            'reported' => false,
            'date_created' => now(),
        ]);

        User::create([
            'name' => 'Yousef Mustafa',
            'email' => 'yousef2@example.com',
            'password' => bcrypt('password123'),
            'role_id' => 2,
            'rating' => 0,
            'image' => 'user_image11.jpg',
            'reported' => false,
            'date_created' => now(),
        ]);

        // Create additional users using a factory
        // User::factory(10)->create(); // Creates 10 dummy users
    }
}
