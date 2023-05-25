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
            'judul' => 'PMII Komisariat Uninus',
            'deskripsi' => 'Cabang Kota Bandung',
            'link' => 'https://www.youtube.com/',
            'gambar' => 'banner_update_-1684699926.jpg',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('home')->insert([
            'judul' => 'Tri Moto PMII',
            'deskripsi' => 'Dzikir, Pikir, Amal Shaleh',
            'link' => 'https://www.instagram.com/',
            'gambar' => 'banner_update_-1684700286.jpeg',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
    }
}
