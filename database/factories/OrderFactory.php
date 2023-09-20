<?php

declare(strict_types=1);

namespace Database\Factories;

use App\Models\City;
use App\Models\Order;
use App\Models\Province;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<\App\Models\Order>
 */
final class OrderFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Order::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition(): array
    {
        return [
            'user_id' => User::query()->inRandomOrder()->first()?->id,
            'shipping_cost' => fake()->numberBetween(10, 10000),
            'total_cost' => fake()->numberBetween(10, 10000),
            'status' => fake()->numberBetween(1, 7),
            'driver_notes' => fake()->text,
            'company_notes' => fake()->text,
            'receiver_phone1' => fake()->word,
            'receiver_phone2' => fake()->word,
            'receiver_city' => City::query()->inRandomOrder()->first()?->id,
            'receiver_province' => Province::query()->inRandomOrder()->first()?->id,
            'receiver_address' => fake()->word,
        ];
    }
}
