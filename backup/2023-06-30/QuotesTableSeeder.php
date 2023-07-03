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
                'img' => 'quotes_update_Soe Hok Gie-1684701036.jpg',
                'name' => 'Soe Hok Gie',
                'who' => 'Aktivis Orde Lama',
                'quote' => 'Hidup adalah keberanian menghadapi tanda tanya.',
                'created_at' => '2023-05-25 09:55:00',
                'updated_at' => '2023-05-25 09:55:00',
            ),
            1 => 
            array (
                'id' => 2,
                'img' => 'quotes_update_Khalil Gibran-1684701466.jpeg',
                'name' => 'Khalil Gibran',
                'who' => 'Seniman, Penyair, Penulis',
                'quote' => 'Apa saja yang membakar dan membuat orang lain terbakar adalah berguna.,
',
                'created_at' => '2023-05-25 09:55:00',
                'updated_at' => '2023-05-25 09:55:00',
            ),
        ));
        
        
    }
}