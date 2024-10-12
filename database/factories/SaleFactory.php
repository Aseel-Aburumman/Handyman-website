<?php

namespace Database\Factories;

use App\Models\Sale;
use App\Models\Store;

use Illuminate\Database\Eloquent\Factories\Factory;

class SaleFactory extends Factory
{
    protected $model = Sale::class;

    public function definition()
    {


        // List of preferred store IDs
        $preferredStoreIds = [12, 13, 14, 15, 16, 17];

        return [
            'store_id' => $this->faker->boolean(80) // 80% chance for preferred store IDs
                ? $this->faker->randomElement($preferredStoreIds)
                : Store::inRandomOrder()->first()->id, // 20% chance for random store ID
            'product_id' => $this->faker->numberBetween(1, 36), // Assuming Product IDs from 1 to 50 exist
            'user_id' => $this->faker->numberBetween(1, 4), // Assuming User IDs from 1 to 100 exist
            'quantity_sold' => $this->faker->numberBetween(1, 2),
            'total_amount' => $this->faker->randomFloat(2, 10, 1000), // Random total amount
            'sale_date' => $this->faker->dateTimeThisYear(),
            'status_id' => $this->faker->numberBetween(16, 19), // Status IDs between 15 and 18
        ];
    }
}




        // return [
        //     'store_id' => Store::inRandomOrder()->first()->id, // Ensure store_id exists in stores table
        //     'product_id' => $this->faker->numberBetween(1, 28), // Assuming Product IDs from 1 to 50 exist
        //     'user_id' => $this->faker->numberBetween(1, 4), // Assuming User IDs from 1 to 100 exist
        //     'quantity_sold' => $this->faker->numberBetween(1, 2),
        //     'total_amount' => $this->faker->randomFloat(2, 10, 1000), // Random total amount
        //     'sale_date' => $this->faker->dateTimeThisYear(),
        //     'status_id' => $this->faker->numberBetween(15, 18), // Status IDs between 15 and 18
        // ];
