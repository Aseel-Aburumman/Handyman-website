<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            StatusesTableSeeder::class,

            RolesTableSeeder::class,
            UsersTableSeeder::class,
            HandymansTableSeeder::class,
            CategoriesTableSeeder::class,
            SkillsTableSeeder::class,
            CertificatesTableSeeder::class,
            SkillCertificatesTableSeeder::class,
            ServicesTableSeeder::class,
            StoreOwnersTableSeeder::class,

            StoresTableSeeder::class,
            ProductsTableSeeder::class,
            ShoppingCartsTableSeeder::class,
            SalesTableSeeder::class,
            TicketsTableSeeder::class,
            ReviewsTableSeeder::class,
            MessagesTableSeeder::class,
            NotificationsTableSeeder::class,
            FollowsTableSeeder::class,
            GigsTableSeeder::class,
        ]);
    }
}
