<?php

namespace Database\Factories;

use Faker\Factory as faker;
use Illuminate\Support\Arr;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Kader>
 */
class KaderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $faker = faker::create();
        return [
            'nama' => $faker->name(),
            'jenis_kelamin' => Arr::random(['L', 'P']),
            'fakultas' => Arr::random(['Teknik', 'Fai', 'Fikom', 'Fkip', 'Hukum', 'Ekonomi']),
            'photo' => Arr::random([
                '1 (1).jpg',
            ]),

        ];
    }
}
