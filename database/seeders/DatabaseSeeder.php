<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\City;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
//        City::factory(10)->create();
//        \App\Models\Province::factory(10)->create();
        \App\Models\User::factory(10);
//        \App\Models\DriverVehicle::factory(10)->create();
//        \App\Models\Order::factory(1000)->create();
//        \App\Models\OrderItem::factory(1000)->create();
        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
