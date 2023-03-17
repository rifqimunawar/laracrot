<?php

namespace Database\Factories;

use Faker\Factory as faker;
use Illuminate\Support\Arr;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Galeri>
 */
class GaleriFactory extends Factory
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
            'img' => Arr::random([
                '1 (3).jpg',
                '1 (4).jpg',
                '1 (5).jpg',
                '1 (7).jpg',
                '1 (8).jpg',
                '1 (9).jpg',
                '1 (10).jpg',
                '1 (11).jpg',
                '1 (12).jpg',
                '1 (13).jpg',
                '1 (14).jpg',
                '1 (20).jpg',
                '1 (24).jpg',
                '1 (25).jpg',
                '1 (38).jpg',
            ]),
            'judul' => $faker->name(),
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ];
    }
}
