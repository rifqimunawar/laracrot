<?php

namespace Database\Seeders;

use App\Models\Galeri;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class GaleriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('galeri')->insert([
            'img' => '1 (23).jpg',
            'user_id'=>'1',
            'status'=>'1',
            'judul' => 'ikeh iekh kimochiii',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('galeri')->insert([
            'img' => '1 (15).jpg',
            'judul' => 'aw aw aw aw',
            'user_id'=>'1',
            'status'=>'0',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('galeri')->insert([
            'img' => '1 (8).jpg',
            'judul' => 'Anjay mabar',
            'user_id'=>'1',
            'status'=>'1',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('galeri')->insert([
            'img' => '1 (4).jpg',
            'judul' => '123465',
            'user_id'=>'1',
            'status'=>'1',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('galeri')->insert([
            'img' => '1 (10).jpg',
            'judul' => 'So asik lo bangsat',
            'user_id'=>'1',
            'status'=>'1',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);





        // create data menggunakan factory faker ===================
        // Galeri::factory()->count(10)->create();
    }
}
