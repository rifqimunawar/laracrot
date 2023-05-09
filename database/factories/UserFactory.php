<?php

namespace Database\Factories;

use Faker\Factory as faker;
use Illuminate\Support\Arr;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        // $faker = faker::create();
        return [
            'name' => fake()->name(15),
            'username' =>fake()->unique()->name(13),
            'role_id' => Arr::random(['1', '2', '3', '4', '5']),
            'thn_mapaba' => Arr::random(['2018', '2019', '2020', '2021', '2022', '2023']),
            'kelamin' => Arr::random(['L', 'P']),
            'email' => fake()->email(),
            'rayon_id' => Arr::random(['1', '2', '3', '4', '5', '6']),
            'email_verified_at' => now(),
            'password' => Hash::make('password'), // password
            'remember_token' => Str::random(10),
            'kaderisasi'=> Arr::random(['Belum Mapaba', 'Mapaba', 'PKD', 'PKL', 'PKN']),
            'nim'=> fake()->numberBetween(5, 9999),
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return $this
     */
    public function unverified(): static
    {
        return $this->state(fn (array $attributes) => [
            'email_verified_at' => null,
        ]);
    }
}
