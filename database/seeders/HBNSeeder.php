<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class HBNSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
      DB::table('h_b_n_s')->insert([
        'title' => 'idul fitri',
        'date' => '2023-06-01',
        'deskripsi' => 'aw aw aw aw',
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
    ]);
      DB::table('h_b_n_s')->insert([
        'title' => 'idul adha',
        'date' => '2023-07-01',
        'deskripsi' => 'aw aw aw aw',
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
    ]);
      DB::table('h_b_n_s')->insert([
        'title' => 'valentine',
        'date' => '2023-02-01',
        'deskripsi' => 'aw aw aw aw',
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
    ]);
      DB::table('h_b_n_s')->insert([
        'title' => 'hari pahlawan',
        'date' => '2023-04-01',
        'deskripsi' => 'aw aw aw aw',
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
    ]);
    }
}
