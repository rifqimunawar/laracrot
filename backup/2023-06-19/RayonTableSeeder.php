<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class RayonTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('rayon')->delete();
        
        \DB::table('rayon')->insert(array (
            0 => 
            array (
                'id' => 1,
                'rayon' => 'Teknik',
                'slug' => 'teknik',
                'created_at' => '2023-06-19 07:19:18',
                'updated_at' => '2023-06-19 07:19:18',
            ),
            1 => 
            array (
                'id' => 2,
                'rayon' => 'Hukum',
                'slug' => 'hukum',
                'created_at' => '2023-06-19 07:19:18',
                'updated_at' => '2023-06-19 07:19:18',
            ),
            2 => 
            array (
                'id' => 3,
                'rayon' => 'Fai',
                'slug' => 'fai',
                'created_at' => '2023-06-19 07:19:18',
                'updated_at' => '2023-06-19 07:19:18',
            ),
            3 => 
            array (
                'id' => 4,
                'rayon' => 'Ekonomi',
                'slug' => 'ekonomi',
                'created_at' => '2023-06-19 07:19:18',
                'updated_at' => '2023-06-19 07:19:18',
            ),
            4 => 
            array (
                'id' => 5,
                'rayon' => 'Fikom',
                'slug' => 'fikom',
                'created_at' => '2023-06-19 07:19:18',
                'updated_at' => '2023-06-19 07:19:18',
            ),
            5 => 
            array (
                'id' => 6,
                'rayon' => 'Fkip',
                'slug' => 'fkip',
                'created_at' => '2023-06-19 07:19:18',
                'updated_at' => '2023-06-19 07:19:18',
            ),
        ));
        
        
    }
}