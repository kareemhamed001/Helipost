<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\City;
use App\Models\Province;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        City::factory(10)->create();
        \App\Models\Province::factory(10)->create();
        \App\Models\User::factory(10);
        \App\Models\User::create([
            'name' => 'Kareem Turk',
            'password' => Hash::make(123456789), // password
            'remember_token' => Str::random(10),
            'image' => fake()->imageUrl(),
            'phone1' => '0123456789',
            'phone2' => fake()->unique()->phoneNumber(),
            'city_id' => City::query()->inRandomOrder()->first()?->id,
            'province_id' => Province::query()->inRandomOrder()->first()?->id,
            'address' => fake()->address(),
            'notes' => fake()->text(),
        ]);
        \App\Models\DriverVehicle::factory(10)->create();
        \App\Models\Order::factory(1000)->create();
        \App\Models\OrderItem::factory(1000)->create();
        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
