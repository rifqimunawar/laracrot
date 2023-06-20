<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class QuotesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('quotes')->delete();
        
        \DB::table('quotes')->insert(array (
            0 => 
            array (
                'id' => 1,
                'img' => 'user.png',
                'name' => 'rifqi',
                'who' => 'penakluk zeus',
                'quote' => 'sakirana cinta ngahalangan kaderisasi!!!!! 
TINGGALKAN!!!!!!!!',
                'created_at' => '2023-06-19 07:19:17',
                'updated_at' => '2023-06-19 07:19:17',
            ),
            1 => 
            array (
                'id' => 2,
            'img' => '1 (6).jpg',
                'name' => 'munawar',
                'who' => 'penakluk hati wanita',
                'quote' => 'lebih sulit dari filsafat lebih rumit dari codingan,
apa itu? cinta',
                'created_at' => '2023-06-19 07:19:17',
                'updated_at' => '2023-06-19 07:19:17',
            ),
            2 => 
            array (
                'id' => 3,
            'img' => '1 (5).jpg',
                'name' => 'rifqi',
                'who' => 'penakluk zeus',
                'quote' => 'sakirana cinta ngahalangan kaderisasi!!!!! 
TINGGALKAN!!!!!!!!',
                'created_at' => '2023-06-19 07:19:17',
                'updated_at' => '2023-06-19 07:19:17',
            ),
        ));
        
        
    }
}