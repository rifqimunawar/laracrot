<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PengurusesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('penguruses')->delete();
        
        \DB::table('penguruses')->insert(array (
            0 => 
            array (
                'id' => 1,
                'img' => 'user.png',
                'name' => 'Riki Ramdan',
                'username' => 'rikiramdan',
                'jabatan' => 'Ketua PMII Komisariat uninus',
                'fb' => NULL,
                'ig' => NULL,
                'twt' => NULL,
                'created_at' => '2023-05-25 09:54:58',
                'updated_at' => '2023-05-25 09:54:58',
            ),
        ));
        
        
    }
}