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
        // DB::table('galeri')->insert([
        //     'galeri' => 'profile_rifqi anjay-1677083268.jpg',
        //     'judul' => 'ikeh iekh kimochiii',
        //     'created_at' => date('Y-m-d H:i:s'),
        //     'updated_at' => date('Y-m-d H:i:s')
        // ]);
        // DB::table('galeri')->insert([
        //     'galeri' => 'profile_rifqi anjay-1677327290.jpg',
        //     'judul' => 'aw aw aw aw',
        //     'created_at' => date('Y-m-d H:i:s'),
        //     'updated_at' => date('Y-m-d H:i:s')
        // ]);
        // DB::table('galeri')->insert([
        //     'galeri' => 'profile_sginaa-1677012333.jpg',
        //     'judul' => 'Anjay mabar',
        //     'created_at' => date('Y-m-d H:i:s'),
        //     'updated_at' => date('Y-m-d H:i:s')
        // ]);
        // DB::table('galeri')->insert([
        //     'galeri' => 'profile_anjay mabar-1677341007.jpg',
        //     'judul' => '0123456789012345679',
        //     'created_at' => date('Y-m-d H:i:s'),
        //     'updated_at' => date('Y-m-d H:i:s')
        // ]);
        // DB::table('galeri')->insert([
        //     'galeri' => 'profile_astagfirullah-1677342490.jpg',
        //     'judul' => 'So asik lo bangsat',
        //     'created_at' => date('Y-m-d H:i:s'),
        //     'updated_at' => date('Y-m-d H:i:s')
        // ]);





        // create data menggunakan factory faker ===================
        Galeri::factory()->count(10)->create();
    }
}
