<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CategoryBooksTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('category_books')->delete();
        
        \DB::table('category_books')->insert(array (
            0 => 
            array (
                'id' => 1,
                'title' => 'pmii',
                'slug' => 'pmii',
                'created_at' => '2023-05-25 09:55:02',
                'updated_at' => '2023-05-25 09:55:02',
            ),
            1 => 
            array (
                'id' => 2,
                'title' => 'filsafat',
                'slug' => 'filsafat',
                'created_at' => '2023-05-25 09:55:03',
                'updated_at' => '2023-05-25 09:55:03',
            ),
            2 => 
            array (
                'id' => 3,
                'title' => 'Romansa',
                'slug' => 'romansa',
                'created_at' => '2023-05-25 12:27:29',
                'updated_at' => '2023-05-25 12:27:29',
            ),
            3 => 
            array (
                'id' => 4,
                'title' => 'Sastra',
                'slug' => 'sastra',
                'created_at' => '2023-05-25 12:27:41',
                'updated_at' => '2023-05-25 12:27:41',
            ),
            4 => 
            array (
                'id' => 5,
                'title' => 'Fiksi Islami',
                'slug' => 'fiksi-islami',
                'created_at' => '2023-05-25 12:27:54',
                'updated_at' => '2023-05-25 12:27:54',
            ),
            5 => 
            array (
                'id' => 6,
                'title' => 'Fantasi',
                'slug' => 'fantasi',
                'created_at' => '2023-05-25 12:28:05',
                'updated_at' => '2023-05-25 12:28:05',
            ),
            6 => 
            array (
                'id' => 7,
                'title' => 'Programming',
                'slug' => 'programming',
                'created_at' => '2023-05-25 13:06:59',
                'updated_at' => '2023-05-25 13:06:59',
            ),
        ));
        
        
    }
}