<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class RayonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('rayon')->insert([
            'rayon' => 'Teknik',
            'slug' => 'teknik',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);
        DB::table('rayon')->insert([
            'rayon' => 'Hukum',
            'slug' => 'hukum',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);
        DB::table('rayon')->insert([
            'rayon' => 'Fai',
            'slug' => 'fai',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);
        DB::table('rayon')->insert([
            'rayon' => 'Ekonomi',
            'slug' => 'ekonomi',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);
        DB::table('rayon')->insert([
            'rayon' => 'Fikom',
            'slug' => 'fikom',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);
        DB::table('rayon')->insert([
            'rayon' => 'Fkip',
            'slug' => 'fkip',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);
    }
}
