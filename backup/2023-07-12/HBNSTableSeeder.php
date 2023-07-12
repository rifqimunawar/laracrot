<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class HBNSTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('h_b_n_s')->delete();
        
        \DB::table('h_b_n_s')->insert(array (
            0 => 
            array (
                'id' => 5,
                'title' => 'Hari Keluarga',
                'date' => '2023-05-29',
                'deskripsi' => 'aw aw aw aw',
                'created_at' => '2023-05-25 09:55:03',
                'updated_at' => '2023-05-25 09:55:03',
            ),
            1 => 
            array (
                'id' => 6,
                'title' => 'Hari Tanpa Tembakau Sedunia',
                'date' => '2023-05-31',
                'deskripsi' => 'aw aw aw aw',
                'created_at' => '2023-05-25 09:55:03',
                'updated_at' => '2023-05-25 09:55:03',
            ),
            2 => 
            array (
                'id' => 8,
                'title' => 'Idul adhw',
                'date' => '2023-06-29',
                'deskripsi' => NULL,
                'created_at' => '2023-06-05 10:16:34',
                'updated_at' => '2023-06-05 10:16:34',
            ),
        ));
        
        
    }
}