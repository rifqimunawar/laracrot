<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CommentsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('comments')->delete();
        
        \DB::table('comments')->insert(array (
            0 => 
            array (
                'id' => 1,
                'user_id' => '11',
                'post_id' => '3',
                'comment' => 'Kereen. Tumbuh subur pergerakan 🌹',
                'created_at' => '2023-06-02 00:08:24',
                'updated_at' => '2023-06-02 00:08:24',
            ),
            1 => 
            array (
                'id' => 2,
                'user_id' => '1',
                'post_id' => '3',
                'comment' => 'mantap sahabat',
                'created_at' => '2023-06-04 11:58:22',
                'updated_at' => '2023-06-04 11:58:22',
            ),
        ));
        
        
    }
}