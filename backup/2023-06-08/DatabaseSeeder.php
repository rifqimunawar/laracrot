<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use DB;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        $this->call([
            RoleSeeder::class,
            UserSeeder::class,
            PengurusSeeder::class,
            GaleriSeeder::class,
            HomeSeeder::class,
            PerpusSeeder::class,
            QuotesSeeder::class,
            CategorySeeder::class,
            TagSeeder::class,
            RayonSeeder::class,
            CategoryBookSeeder::class,
            HBNSeeder::class,
            // PostSeeder::class,
        ]);

    // $backup = database_path(__DIR__ . 'laracrot.sql');
    // DB::unprepared(file_get_contents($backup));
        $this->call(AgendasTableSeeder::class);
    }
}
