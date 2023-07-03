<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class TagsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('tags')->delete();
        
        \DB::table('tags')->insert(array (
            0 => 
            array (
                'id' => 1,
                'title' => 'pmii',
                'slug' => 'pmii',
                'created_at' => '2023-05-25 09:55:01',
                'updated_at' => '2023-05-25 09:55:01',
            ),
            1 => 
            array (
                'id' => 2,
                'title' => 'pmiiuninus',
                'slug' => 'pmiiuninus',
                'created_at' => '2023-05-25 09:55:01',
                'updated_at' => '2023-05-25 09:55:01',
            ),
            2 => 
            array (
                'id' => 3,
                'title' => 'pmiiteknik',
                'slug' => 'pmiiteknik',
                'created_at' => '2023-05-25 09:55:01',
                'updated_at' => '2023-05-25 09:55:01',
            ),
            3 => 
            array (
                'id' => 4,
                'title' => 'pmiibandung',
                'slug' => 'pmiibandung',
                'created_at' => '2023-05-25 09:55:02',
                'updated_at' => '2023-05-25 09:55:02',
            ),
            4 => 
            array (
                'id' => 5,
                'title' => 'pmiimajumendunia',
                'slug' => 'pmiimajumendunia',
                'created_at' => '2023-05-25 09:55:02',
                'updated_at' => '2023-05-25 09:55:02',
            ),
        ));
        
        
    }
}