<?php

namespace Database\Factories;

use App\Models\Product;
use App\Models\Store; // Import the Store model

use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    protected $model = Product::class;

    public function definition()
    {
        return [
            'store_id' => Store::inRandomOrder()->first()->id, // Ensure store_id exists in stores table
            'name' => $this->faker->word(), // Random product name
            'rating' => $this->faker->randomFloat(1, 1, 5), // Random rating between 1 and 5
            'description' => $this->faker->sentence(), // Random description
            'price' => $this->faker->randomFloat(2, 10, 1000), // Random price between 10 and 1000
            'availability' => $this->faker->boolean(), // Random boolean for availability
            'stock_quantity' => $this->faker->numberBetween(0, 100), // Random stock quantity between 0 and 100
        ];
    }
}
