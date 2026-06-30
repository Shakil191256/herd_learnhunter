<?php

namespace Database\Factories;

use App\Models\Shop;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<shop>
 */
class ShopFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
             'shop_name' => fake()->company(),
        'shop_number' => fake()->unique()->numberBetween(1000, 9999),
        'shop_address' => fake()->address(),
        'shop_phone_number' => fake()->numerify('018########'),
        'shop_email' => fake()->unique()->safeEmail(),
        'shop_owner_name' => fake()->name(),
        ];
    }
}
