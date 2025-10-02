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
                'id' => 6,
                'img' => 'galeri_-1685011217.jpg',
                'user_id' => 1,
                'judul' => 'kampus uninus chuaaaks',
                'status' => '1',
                'created_at' => '2023-05-25 10:40:17',
                'updated_at' => '2023-05-25 10:41:41',
            ),
            1 => 
            array (
                'id' => 12,
                'img' => 'galeri_-1685012604.jpg',
                'user_id' => 1,
                'judul' => 'Pelantikan Rayon Teknik',
                'status' => '1',
                'created_at' => '2023-05-25 11:03:24',
                'updated_at' => '2023-05-25 11:03:45',
            ),
        ));
        
        
    }
}