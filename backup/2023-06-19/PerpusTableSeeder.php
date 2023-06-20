<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PerpusTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('perpus')->delete();
        
        \DB::table('perpus')->insert(array (
            0 => 
            array (
                'id' => 1,
                'judul' => 'Berita terbaru hari ini',
                'slug' => 'berita-terbaru-hari-ini',
                'penulis' => NULL,
                'penerbit' => NULL,
                'thn_terbit' => NULL,
                'isbn' => NULL,
                'bahasa' => NULL,
                'halaman' => NULL,
                'deskripsi' => NULL,
                'categorybook_id' => 1,
                'user_id' => 1,
                'image' => 'Screenshot_3.jpg',
                'pdf' => 'download.pdf',
                'created_at' => '2023-06-19 07:19:17',
                'updated_at' => '2023-06-19 07:19:17',
            ),
            1 => 
            array (
                'id' => 2,
                'judul' => 'Berita terbaru hari ini',
                'slug' => 'berita-terbaru-hari-ini',
                'penulis' => NULL,
                'penerbit' => NULL,
                'thn_terbit' => NULL,
                'isbn' => NULL,
                'bahasa' => NULL,
                'halaman' => NULL,
                'deskripsi' => NULL,
                'categorybook_id' => 1,
                'user_id' => 2,
                'image' => 'Screenshot_4.jpg',
                'pdf' => 'download.pdf',
                'created_at' => '2023-06-19 07:19:17',
                'updated_at' => '2023-06-19 07:19:17',
            ),
            2 => 
            array (
                'id' => 3,
                'judul' => 'Berita terbaru hari ini',
                'slug' => 'berita-terbaru-hari-ini',
                'penulis' => NULL,
                'penerbit' => NULL,
                'thn_terbit' => NULL,
                'isbn' => NULL,
                'bahasa' => NULL,
                'halaman' => NULL,
                'deskripsi' => NULL,
                'categorybook_id' => 1,
                'user_id' => 1,
                'image' => 'Screenshot_5.jpg',
                'pdf' => 'download.pdf',
                'created_at' => '2023-06-19 07:19:17',
                'updated_at' => '2023-06-19 07:19:17',
            ),
            3 => 
            array (
                'id' => 4,
                'judul' => 'Berita terbaru hari ini',
                'slug' => 'berita-terbaru-hari-ini',
                'penulis' => NULL,
                'penerbit' => NULL,
                'thn_terbit' => NULL,
                'isbn' => NULL,
                'bahasa' => NULL,
                'halaman' => NULL,
                'deskripsi' => NULL,
                'categorybook_id' => 2,
                'user_id' => 2,
                'image' => 'Screenshot_6.jpg',
                'pdf' => 'download.pdf',
                'created_at' => '2023-06-19 07:19:17',
                'updated_at' => '2023-06-19 07:19:17',
            ),
            4 => 
            array (
                'id' => 5,
                'judul' => 'Berita terbaru hari ini',
                'slug' => 'berita-terbaru-hari-ini',
                'penulis' => NULL,
                'penerbit' => NULL,
                'thn_terbit' => NULL,
                'isbn' => NULL,
                'bahasa' => NULL,
                'halaman' => NULL,
                'deskripsi' => NULL,
                'categorybook_id' => 2,
                'user_id' => 3,
                'image' => 'Screenshot_7.jpg',
                'pdf' => 'download.pdf',
                'created_at' => '2023-06-19 07:19:17',
                'updated_at' => '2023-06-19 07:19:17',
            ),
            5 => 
            array (
                'id' => 6,
                'judul' => 'Berita terbaru hari ini',
                'slug' => 'berita-terbaru-hari-ini',
                'penulis' => NULL,
                'penerbit' => NULL,
                'thn_terbit' => NULL,
                'isbn' => NULL,
                'bahasa' => NULL,
                'halaman' => NULL,
                'deskripsi' => NULL,
                'categorybook_id' => 2,
                'user_id' => 1,
                'image' => 'Screenshot_8.jpg',
                'pdf' => 'download.pdf',
                'created_at' => '2023-06-19 07:19:17',
                'updated_at' => '2023-06-19 07:19:17',
            ),
            6 => 
            array (
                'id' => 7,
                'judul' => 'Berita terbaru hari ini',
                'slug' => 'berita-terbaru-hari-ini',
                'penulis' => NULL,
                'penerbit' => NULL,
                'thn_terbit' => NULL,
                'isbn' => NULL,
                'bahasa' => NULL,
                'halaman' => NULL,
                'deskripsi' => NULL,
                'categorybook_id' => 1,
                'user_id' => 2,
                'image' => 'Screenshot_9.jpg',
                'pdf' => 'download.pdf',
                'created_at' => '2023-06-19 07:19:17',
                'updated_at' => '2023-06-19 07:19:17',
            ),
            7 => 
            array (
                'id' => 8,
                'judul' => 'Berita terbaru hari ini',
                'slug' => 'berita-terbaru-hari-ini',
                'penulis' => NULL,
                'penerbit' => NULL,
                'thn_terbit' => NULL,
                'isbn' => NULL,
                'bahasa' => NULL,
                'halaman' => NULL,
                'deskripsi' => NULL,
                'categorybook_id' => 2,
                'user_id' => 3,
                'image' => 'Screenshot_10.jpg',
                'pdf' => 'download.pdf',
                'created_at' => '2023-06-19 07:19:17',
                'updated_at' => '2023-06-19 07:19:17',
            ),
            8 => 
            array (
                'id' => 9,
                'judul' => 'Berita terbaru hari ini',
                'slug' => 'berita-terbaru-hari-ini',
                'penulis' => NULL,
                'penerbit' => NULL,
                'thn_terbit' => NULL,
                'isbn' => NULL,
                'bahasa' => NULL,
                'halaman' => NULL,
                'deskripsi' => NULL,
                'categorybook_id' => 2,
                'user_id' => 1,
                'image' => 'Screenshot_11.jpg',
                'pdf' => 'download.pdf',
                'created_at' => '2023-06-19 07:19:17',
                'updated_at' => '2023-06-19 07:19:17',
            ),
        ));
        
        
    }
}