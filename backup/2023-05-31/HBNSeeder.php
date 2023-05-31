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
        'title' => 'Hari Buku Nasional',
        'date' => '2023-05-17',
        'deskripsi' => 'aw aw aw aw',
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
    ]);
      DB::table('h_b_n_s')->insert([
        'title' => 'Hari Ulang Tahun Perpustakaan RI',
        'date' => '2023-05-17',
        'deskripsi' => 'aw aw aw aw',
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
    ]);
      DB::table('h_b_n_s')->insert([
        'title' => 'Hari Kebangkitan Nasional',
        'date' => '2023-05-20',
        'deskripsi' => 'aw aw aw aw',
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
    ]);
      DB::table('h_b_n_s')->insert([
        'title' => 'Hari Peringatan Revormasi',
        'date' => '2023-05-21',
        'deskripsi' => 'aw aw aw aw',
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
    ]);
      DB::table('h_b_n_s')->insert([
        'title' => 'Hari Keluarga',
        'date' => '2023-05-29',
        'deskripsi' => 'aw aw aw aw',
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
    ]);
      DB::table('h_b_n_s')->insert([
        'title' => 'Hari Tanpa Tembakau Sedunia',
        'date' => '2023-05-31',
        'deskripsi' => 'aw aw aw aw',
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
    ]);
      DB::table('h_b_n_s')->insert([
        'title' => 'Hari Lahir Pancasila',
        'date' => '2023-06-01',
        'deskripsi' => 'aw aw aw aw',
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
    ]);
    }
}
