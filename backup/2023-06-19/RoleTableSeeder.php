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
                'created_at' => '2023-06-19 07:19:17',
                'updated_at' => '2023-06-19 07:19:17',
            ),
            1 => 
            array (
                'id' => 2,
                'role' => 'admin',
                'created_at' => '2023-06-19 07:19:17',
                'updated_at' => '2023-06-19 07:19:17',
            ),
            2 => 
            array (
                'id' => 3,
                'role' => 'user',
                'created_at' => '2023-06-19 07:19:17',
                'updated_at' => '2023-06-19 07:19:17',
            ),
            3 => 
            array (
                'id' => 4,
                'role' => 'guest',
                'created_at' => '2023-06-19 07:19:17',
                'updated_at' => '2023-06-19 07:19:17',
            ),
            4 => 
            array (
                'id' => 5,
                'role' => 'unverification',
                'created_at' => '2023-06-19 07:19:17',
                'updated_at' => '2023-06-19 07:19:17',
            ),
        ));
        
        
    }
}