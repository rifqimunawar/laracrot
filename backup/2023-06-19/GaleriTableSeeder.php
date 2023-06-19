<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class GaleriTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('galeri')->delete();
        
        \DB::table('galeri')->insert(array (
            0 => 
            array (
                'id' => 1,
            'img' => '1 (1).jpg',
                'user_id' => 1,
                'judul' => 'ikeh iekh kimochiii',
                'status' => '1',
                'created_at' => '2023-06-19 07:19:17',
                'updated_at' => '2023-06-19 07:19:17',
            ),
            1 => 
            array (
                'id' => 2,
            'img' => '1 (5).jpg',
                'user_id' => 1,
                'judul' => 'aw aw aw aw',
                'status' => '0',
                'created_at' => '2023-06-19 07:19:17',
                'updated_at' => '2023-06-19 07:19:17',
            ),
            2 => 
            array (
                'id' => 3,
            'img' => '1 (6).jpg',
                'user_id' => 1,
                'judul' => 'Anjay mabar',
                'status' => '1',
                'created_at' => '2023-06-19 07:19:17',
                'updated_at' => '2023-06-19 07:19:17',
            ),
            3 => 
            array (
                'id' => 4,
                'img' => 'home3.jpg',
                'user_id' => 1,
                'judul' => '123465',
                'status' => '1',
                'created_at' => '2023-06-19 07:19:17',
                'updated_at' => '2023-06-19 07:19:17',
            ),
            4 => 
            array (
                'id' => 5,
                'img' => 'Screenshot_12.jpg',
                'user_id' => 1,
                'judul' => 'So asik lo bangsat',
                'status' => '1',
                'created_at' => '2023-06-19 07:19:17',
                'updated_at' => '2023-06-19 07:19:17',
            ),
        ));
        
        
    }
}