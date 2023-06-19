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
                'title' => 'berita',
                'slug' => 'berita',
                'created_at' => '2023-06-19 07:19:17',
                'updated_at' => '2023-06-19 07:19:17',
            ),
            1 => 
            array (
                'id' => 2,
                'title' => 'mahasiswa',
                'slug' => 'mahasiswa',
                'created_at' => '2023-06-19 07:19:17',
                'updated_at' => '2023-06-19 07:19:17',
            ),
            2 => 
            array (
                'id' => 3,
                'title' => 'pmii',
                'slug' => 'pmii',
                'created_at' => '2023-06-19 07:19:17',
                'updated_at' => '2023-06-19 07:19:17',
            ),
            3 => 
            array (
                'id' => 4,
                'title' => 'kader',
                'slug' => 'kader',
                'created_at' => '2023-06-19 07:19:17',
                'updated_at' => '2023-06-19 07:19:17',
            ),
            4 => 
            array (
                'id' => 5,
                'title' => 'kampus',
                'slug' => 'kampus',
                'created_at' => '2023-06-19 07:19:17',
                'updated_at' => '2023-06-19 07:19:17',
            ),
        ));
        
        
    }
}