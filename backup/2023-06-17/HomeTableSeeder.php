<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class HomeTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('home')->delete();
        
        \DB::table('home')->insert(array (
            0 => 
            array (
                'id' => 1,
                'judul' => 'Berita terbaru hari ini',
                'deskripsi' => 'aw aw aw aw',
                'link' => 'https://www.youtube.com/',
                'gambar' => 'home3.jpg',
                'created_at' => '2023-06-12 15:28:31',
                'updated_at' => '2023-06-12 15:28:31',
            ),
            1 => 
            array (
                'id' => 2,
                'judul' => 'Berita kedua',
                'deskripsi' => 'ikeh ikeh kimochi',
                'link' => 'https://www.instagram.com/',
                'gambar' => 'home1.jpg',
                'created_at' => '2023-06-12 15:28:31',
                'updated_at' => '2023-06-12 15:28:31',
            ),
            2 => 
            array (
                'id' => 3,
                'judul' => 'Berita ketiga',
                'deskripsi' => 'baru anjay mabar',
                'link' => 'https://www.instagram.com/',
                'gambar' => 'home2.jpg',
                'created_at' => '2023-06-12 15:28:31',
                'updated_at' => '2023-06-12 15:28:31',
            ),
        ));
        
        
    }
}