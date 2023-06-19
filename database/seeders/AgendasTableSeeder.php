<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AgendasTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('agendas')->delete();
        
        \DB::table('agendas')->insert(array (
            0 => 
            array (
                'id' => 1,
                'title' => 'Pelantikan Pengurus Komisariat',
                'penyelenggara' => 'Komisariat',
                'start' => '2023-05-26T13:00',
                'tempat' => 'Gd. PascaSarjana Lt 1',
                'description' => 'Pelantikan PK PMII UNINUS dengan tema "NGASUH NGASAH PMII"',
                'pamflet' => 'agenda_Komisariat-1685010565.png',
                'created_at' => '2023-05-25 10:29:25',
                'updated_at' => '2023-05-25 10:29:25',
            ),
            1 => 
            array (
                'id' => 2,
                'title' => 'Taman Baca',
                'penyelenggara' => 'Rayon Teknik',
                'start' => '2023-05-31T16:00',
                'tempat' => 'Rumput Surga',
                'description' => 'Non-Formal',
                'pamflet' => 'agenda_Rayon Teknik-1685505252.jpg',
                'created_at' => '2023-05-31 03:54:12',
                'updated_at' => '2023-05-31 03:54:12',
            ),
        ));
        
        
    }
}