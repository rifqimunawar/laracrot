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
                'created_at' => '2023-06-19 07:19:18',
                'updated_at' => '2023-06-19 07:19:18',
            ),
            1 => 
            array (
                'id' => 2,
                'title' => 'filsafat',
                'slug' => 'filsafat',
                'created_at' => '2023-06-19 07:19:18',
                'updated_at' => '2023-06-19 07:19:18',
            ),
        ));
        
        
    }
}