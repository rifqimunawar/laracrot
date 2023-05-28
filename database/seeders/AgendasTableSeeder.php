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
        
        
        
    }
}