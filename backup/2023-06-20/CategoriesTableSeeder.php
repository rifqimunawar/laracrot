<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('categories')->delete();
        
        \DB::table('categories')->insert(array (
            0 => 
            array (
                'id' => 1,
                'title' => 'Berita',
                'slug' => 'berita',
                'created_at' => '2023-05-25 09:55:00',
                'updated_at' => '2023-05-27 13:10:17',
            ),
            1 => 
            array (
                'id' => 2,
                'title' => 'Mahasiswa',
                'slug' => 'mahasiswa',
                'created_at' => '2023-05-25 09:55:01',
                'updated_at' => '2023-05-27 13:10:28',
            ),
            2 => 
            array (
                'id' => 3,
                'title' => 'PMII',
                'slug' => 'pmii',
                'created_at' => '2023-05-25 09:55:01',
                'updated_at' => '2023-05-27 13:10:38',
            ),
            3 => 
            array (
                'id' => 4,
                'title' => 'Opini',
                'slug' => 'kader',
                'created_at' => '2023-05-25 09:55:01',
                'updated_at' => '2023-05-27 13:11:10',
            ),
            4 => 
            array (
                'id' => 5,
                'title' => 'Teori',
                'slug' => 'kampus',
                'created_at' => '2023-05-25 09:55:01',
                'updated_at' => '2023-05-27 13:11:20',
            ),
        ));
        
        
    }
}