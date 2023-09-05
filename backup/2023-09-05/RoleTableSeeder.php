<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class RoleTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('role')->delete();
        
        \DB::table('role')->insert(array (
            0 => 
            array (
                'id' => 1,
                'role' => 'Superadmin',
                'created_at' => '2023-05-25 09:54:57',
                'updated_at' => '2023-05-25 09:54:57',
            ),
            1 => 
            array (
                'id' => 2,
                'role' => 'admin',
                'created_at' => '2023-05-25 09:54:57',
                'updated_at' => '2023-05-25 09:54:57',
            ),
            2 => 
            array (
                'id' => 3,
                'role' => 'user',
                'created_at' => '2023-05-25 09:54:57',
                'updated_at' => '2023-05-25 09:54:57',
            ),
            3 => 
            array (
                'id' => 4,
                'role' => 'guest',
                'created_at' => '2023-05-25 09:54:57',
                'updated_at' => '2023-05-25 09:54:57',
            ),
            4 => 
            array (
                'id' => 5,
                'role' => 'unverification',
                'created_at' => '2023-05-25 09:54:57',
                'updated_at' => '2023-05-25 09:54:57',
            ),
        ));
        
        
    }
}