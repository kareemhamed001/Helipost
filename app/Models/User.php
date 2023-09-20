<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, HasRoles;

    public static function factory($count, $state = null)
    {
        for ($i = 0; $i < $count; $i++) {
            $driverRole = \Spatie\Permission\Models\Role::query()->where('name', 'driver')->firstOrCreate([
                'name'=>'driver'
            ]);
            $userRole = \Spatie\Permission\Models\Role::query()->where('name', 'user')->firstOrCreate([
                'name'=>'user'
            ]);

            $user=User::create([
                'name' => fake()->name(),
                'password' => Hash::make(123456789), // password
                'remember_token' => Str::random(10),
                'image' => fake()->imageUrl(),
                'phone1' => fake()->unique()->phoneNumber(),
                'phone2' => fake()->unique()->phoneNumber(),
                'city_id' => City::query()->inRandomOrder()->first()?->id,
                'province_id' => Province::query()->inRandomOrder()->first()?->id,
                'address' => fake()->address(),
                'notes' => fake()->text(),
            ]);
            $user->assignRole('user');
            $user->assignRole('driver');

        }

    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    function orders()
    {
        return $this->hasMany(Order::class);
    }
    function vehicles()
    {
        return $this->hasMany(DriverVehicle::class,'user_id');
    }


}
