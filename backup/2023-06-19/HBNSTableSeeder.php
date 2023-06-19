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
                'id' => 1,
                'title' => 'Hari Buku Nasional',
                'date' => '2023-05-17',
                'deskripsi' => 'aw aw aw aw',
                'created_at' => '2023-06-19 07:19:18',
                'updated_at' => '2023-06-19 07:19:18',
            ),
            1 => 
            array (
                'id' => 2,
                'title' => 'Hari Ulang Tahun Perpustakaan RI',
                'date' => '2023-05-17',
                'deskripsi' => 'aw aw aw aw',
                'created_at' => '2023-06-19 07:19:18',
                'updated_at' => '2023-06-19 07:19:18',
            ),
            2 => 
            array (
                'id' => 3,
                'title' => 'Hari Kebangkitan Nasional',
                'date' => '2023-05-20',
                'deskripsi' => 'aw aw aw aw',
                'created_at' => '2023-06-19 07:19:18',
                'updated_at' => '2023-06-19 07:19:18',
            ),
            3 => 
            array (
                'id' => 4,
                'title' => 'Hari Peringatan Revormasi',
                'date' => '2023-05-21',
                'deskripsi' => 'aw aw aw aw',
                'created_at' => '2023-06-19 07:19:18',
                'updated_at' => '2023-06-19 07:19:18',
            ),
            4 => 
            array (
                'id' => 5,
                'title' => 'Hari Keluarga',
                'date' => '2023-05-29',
                'deskripsi' => 'aw aw aw aw',
                'created_at' => '2023-06-19 07:19:18',
                'updated_at' => '2023-06-19 07:19:18',
            ),
            5 => 
            array (
                'id' => 6,
                'title' => 'Hari Tanpa Tembakau Sedunia',
                'date' => '2023-05-31',
                'deskripsi' => 'aw aw aw aw',
                'created_at' => '2023-06-19 07:19:18',
                'updated_at' => '2023-06-19 07:19:18',
            ),
            6 => 
            array (
                'id' => 7,
                'title' => 'Hari Lahir Pancasila',
                'date' => '2023-06-01',
                'deskripsi' => 'aw aw aw aw',
                'created_at' => '2023-06-19 07:19:18',
                'updated_at' => '2023-06-19 07:19:18',
            ),
        ));
        
        
    }
}