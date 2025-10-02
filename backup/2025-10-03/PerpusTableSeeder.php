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
                'id' => 11,
                'judul' => 'HTML5 Notes For Professionals',
                'slug' => 'html5-notes-for-professionals',
                'penulis' => 'goalkicker.com',
                'penerbit' => 'goalkicker.com',
                'thn_terbit' => '2020',
                'isbn' => '-',
                'bahasa' => 'english',
                'halaman' => '176',
                'deskripsi' => 'Membahas mengenai cara pembuatan website dengan html 5',
                'categorybook_id' => 7,
                'user_id' => 1,
                'image' => 'perpus_-1685020274.png',
                'pdf' => 'perpus_-1685020274.pdf',
                'created_at' => '2023-05-25 13:11:14',
                'updated_at' => '2023-05-25 13:11:14',
            ),
            1 => 
            array (
                'id' => 12,
                'judul' => 'JavaScript Data Structures and Algorithms',
                'slug' => 'javascript-data-structures-and-algorithms',
                'penulis' => 'Sammie Bae',
                'penerbit' => '-',
                'thn_terbit' => '-',
                'isbn' => '-',
                'bahasa' => 'english',
                'halaman' => '351',
                'deskripsi' => 'JavaScript Data Structures and Algorithms',
                'categorybook_id' => 1,
                'user_id' => 1,
                'image' => 'perpus_-1685020510.png',
                'pdf' => 'perpus_-1685020510.pdf',
                'created_at' => '2023-05-25 13:15:12',
                'updated_at' => '2023-05-25 13:15:12',
            ),
            2 => 
            array (
                'id' => 13,
                'judul' => 'Benturan NU - PKI',
                'slug' => 'benturan-nu-pki',
                'penulis' => '-',
                'penerbit' => '-',
                'thn_terbit' => '2013',
                'isbn' => '-',
                'bahasa' => 'Indonesia',
                'halaman' => '159',
                'deskripsi' => '-',
                'categorybook_id' => 4,
                'user_id' => 1,
                'image' => 'perpus_Benturan NU - PKI-1685132485.jpg',
                'pdf' => 'perpus_Benturan NU - PKI-1685132485.pdf',
                'created_at' => '2023-05-26 20:21:25',
                'updated_at' => '2023-05-26 20:21:25',
            ),
            3 => 
            array (
                'id' => 14,
                'judul' => 'Analisis Sosial',
                'slug' => 'analisis-sosial',
                'penulis' => '-',
                'penerbit' => '-',
                'thn_terbit' => '-',
                'isbn' => '-',
                'bahasa' => 'Indonesia',
                'halaman' => '241',
                'deskripsi' => '-',
                'categorybook_id' => 1,
                'user_id' => 1,
                'image' => 'perpus_Analisis Sosial-1685132884.jpg',
                'pdf' => 'perpus_Analisis Sosial-1685132884.pdf',
                'created_at' => '2023-05-26 20:28:04',
                'updated_at' => '2023-05-26 20:28:04',
            ),
            4 => 
            array (
                'id' => 15,
                'judul' => 'Filsafat Ilmu',
                'slug' => 'filsafat-ilmu',
                'penulis' => '-',
                'penerbit' => '-',
                'thn_terbit' => '2013',
                'isbn' => '-',
                'bahasa' => 'Indonesia',
                'halaman' => '95',
                'deskripsi' => '-',
                'categorybook_id' => 2,
                'user_id' => 1,
                'image' => 'perpus_Filsafat Ilmu-1685133212.jpg',
                'pdf' => 'perpus_Filsafat Ilmu-1685133212.pdf',
                'created_at' => '2023-05-26 20:33:32',
                'updated_at' => '2023-05-26 20:33:32',
            ),
            5 => 
            array (
                'id' => 16,
                'judul' => 'Filsafat Islam',
                'slug' => 'filsafat-islam',
                'penulis' => 'Abdallah Baehaqi :v',
                'penerbit' => NULL,
                'thn_terbit' => NULL,
                'isbn' => NULL,
                'bahasa' => NULL,
                'halaman' => NULL,
                'deskripsi' => '!!إقرأ صحبة',
                'categorybook_id' => 2,
                'user_id' => 9,
                'image' => 'perpus_-1685192467.jpg',
                'pdf' => 'perpus_-1685192467.pdf',
                'created_at' => '2023-05-27 13:01:07',
                'updated_at' => '2023-05-27 13:01:07',
            ),
        ));
        
        
    }
}