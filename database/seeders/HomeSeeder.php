<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HomeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('home')->insert([
            'judul' => 'Berita terbaru hari ini',
            'deskripsi' => 'aw aw aw aw',
            'link' => 'https://www.youtube.com/',
            'gambar' => 'home3.jpg',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('home')->insert([
            'judul' => 'Berita kedua',
            'deskripsi' => 'ikeh ikeh kimochi',
            'link' => 'https://www.instagram.com/',
            'gambar' => 'home1.jpg',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('home')->insert([
            'judul' => 'Berita ketiga',
            'deskripsi' => 'baru anjay mabar',
            'link' => 'https://www.instagram.com/',
            'gambar' => 'home2.jpg',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
    }
}
