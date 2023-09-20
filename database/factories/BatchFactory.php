<?php

declare(strict_types=1);

namespace Database\Factories;

use App\Models\Batch;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<\App\Models\Batch>
 */
final class BatchFactory extends Factory
{
    /**
    * The name of the factory's corresponding model.
    *
    * @var string
    */
    protected $model = Batch::class;

    /**
    * Define the model's default state.
    *
    * @return array
    */
    public function definition(): array
    {
        return [
            'order_id' => fake()->randomNumber(),
            'user_id' => fake()->randomNumber(),
        ];
    }
}
