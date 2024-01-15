<?php

namespace Database\Factories;

use App\Models\Center;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\PublicUser>
 */
class PublicUserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'email' => fake()->unique()->safeEmail(),
            'password'=> Hash::make('12345'),
            'phone' => preg_replace('/[^0-9]/', '', fake()->phoneNumber()),
            'nid'   => mt_rand(1000000000,9999999999),
            'center_id' => Center::inRandomOrder()->first()->id,
            'scheduled_date'    => null,
            'remember_token' => Str::random(10),
        ];
    }
}
