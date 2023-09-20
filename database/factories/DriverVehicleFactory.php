<?php

declare(strict_types=1);

namespace Database\Factories;

use App\Models\DriverVehicle;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<\App\Models\DriverVehicle>
 */
final class DriverVehicleFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = DriverVehicle::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition(): array
    {
        $driverRole = \Spatie\Permission\Models\Role::query()->where('name', 'driver')->first();
        $driver = User::query()->role($driverRole)->inRandomOrder()->first();
        return [
            'brand' => fake()->word,
            'model' => fake()->word,
            'year_model' => fake()->date(),
            'licence_plate' => fake()->word,
            'color' => fake()->word,
            'image' => fake()->word,
            'user_id' => $driver?->id ?? User::factory()->create()->id,
        ];
    }
}
