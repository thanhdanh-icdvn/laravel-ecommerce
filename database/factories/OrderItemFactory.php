<?php

namespace Database\Factories;

use App\Models\Order;
use App\Models\SKU;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\OrderItem>
 */
class OrderItemFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'order_id' => Order::factory(),
            'sku_id' => SKU::factory(),
            'name' => $this->faker->sentence,
            'price' => $this->faker->numberBetween(10000, 100000),
            'quantity' => $this->faker->numberBetween(1, 5),
        ];
    }
}
