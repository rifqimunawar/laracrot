<?php

namespace Database\Seeders;

use App\Models\Perpus;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PerpusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('perpus')->insert([
            'judul' => 'Berita terbaru hari ini',
            'slug' => 'berita-terbaru-hari-ini',
            'user_id'=>'1',
            'categorybook_id'=>'1',
            'image' => 'Screenshot_3.jpg',
            'pdf' => 'download.pdf',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('perpus')->insert([
            'judul' => 'Berita terbaru hari ini',
            'slug' => 'berita-terbaru-hari-ini',
            'user_id'=>'2',
            'categorybook_id'=>'1',
            'image' => 'Screenshot_4.jpg',
            'pdf' => 'download.pdf',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('perpus')->insert([
            'judul' => 'Berita terbaru hari ini',
            'slug' => 'berita-terbaru-hari-ini',
            'user_id'=>'1',
            'categorybook_id'=>'1',
            'image' => 'Screenshot_5.jpg',
            'pdf' => 'download.pdf',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('perpus')->insert([
            'judul' => 'Berita terbaru hari ini',
            'slug' => 'berita-terbaru-hari-ini',
            'user_id'=>'2',
            'categorybook_id'=>'2',
            'image' => 'Screenshot_6.jpg',
            'pdf' => 'download.pdf',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('perpus')->insert([
            'judul' => 'Berita terbaru hari ini',
            'slug' => 'berita-terbaru-hari-ini',
            'user_id'=>'3',
            'categorybook_id'=>'2',
            'image' => 'Screenshot_7.jpg',
            'pdf' => 'download.pdf',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('perpus')->insert([
            'judul' => 'Berita terbaru hari ini',
            'slug' => 'berita-terbaru-hari-ini',
            'user_id'=>'1',
            'categorybook_id'=>'2',
            'image' => 'Screenshot_8.jpg',
            'pdf' => 'download.pdf',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('perpus')->insert([
            'judul' => 'Berita terbaru hari ini',
            'slug' => 'berita-terbaru-hari-ini',
            'user_id'=>'2',
            'categorybook_id'=>'1',
            'image' => 'Screenshot_9.jpg',
            'pdf' => 'download.pdf',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('perpus')->insert([
            'judul' => 'Berita terbaru hari ini',
            'slug' => 'berita-terbaru-hari-ini',
            'user_id'=>'3',
            'categorybook_id'=>'2',
            'image' => 'Screenshot_10.jpg',
            'pdf' => 'download.pdf',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('perpus')->insert([
            'judul' => 'Berita terbaru hari ini',
            'slug' => 'berita-terbaru-hari-ini',
            'user_id'=>'1',
            'categorybook_id'=>'2',
            'image' => 'Screenshot_11.jpg',
            'pdf' => 'download.pdf',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
        // DB::table('perpus')->insert([
        //     'judul' => 'Berita terbaru hari ini',
        //     'user_id'=>'2',
        //     'image' => 'Screenshot_12.jpg',
        //     'pdf' => 'download.pdf',
        //     'created_at' => date('Y-m-d H:i:s'),
        //     'updated_at' => date('Y-m-d H:i:s')
        // ]);
        // DB::table('perpus')->insert([
        //     'judul' => 'Berita terbaru hari ini',
        //     'user_id'=>'2',
        //     'image' => 'Screenshot_13.jpg',
        //     'pdf' => 'download.pdf',
        //     'created_at' => date('Y-m-d H:i:s'),
        //     'updated_at' => date('Y-m-d H:i:s')
        // ]);
        // DB::table('perpus')->insert([
        //     'judul' => 'Berita terbaru hari ini',
        //     'user_id'=>'2',
        //     'image' => 'Screenshot_14.jpg',
        //     'pdf' => 'download.pdf',
        //     'created_at' => date('Y-m-d H:i:s'),
        //     'updated_at' => date('Y-m-d H:i:s')
        // ]);
        // DB::table('perpus')->insert([
        //     'judul' => 'Berita terbaru hari ini',
        //     'user_id'=>'1',
        //     'image' => 'Screenshot_20.jpg',
        //     'pdf' => 'download.pdf',
        //     'created_at' => date('Y-m-d H:i:s'),
        //     'updated_at' => date('Y-m-d H:i:s')
        // ]);
        // DB::table('perpus')->insert([
        //     'judul' => 'Berita terbaru hari ini',
        //     'user_id'=>'1',
        //     'image' => 'Screenshot_22.jpg',
        //     'pdf' => 'download.pdf',
        //     'created_at' => date('Y-m-d H:i:s'),
        //     'updated_at' => date('Y-m-d H:i:s')
        // ]);
    }
}
