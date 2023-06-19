<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class HomeTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('home')->delete();
        
        \DB::table('home')->insert(array (
            0 => 
            array (
                'id' => 1,
                'judul' => 'PMII Komisariat Uninus',
                'deskripsi' => 'Cabang Kota Bandung',
                'link' => 'https://www.youtube.com/',
                'gambar' => 'banner_update_-1684699926.jpg',
                'created_at' => '2023-05-25 09:54:59',
                'updated_at' => '2023-05-25 09:54:59',
            ),
            1 => 
            array (
                'id' => 2,
                'judul' => 'Tri Moto PMII',
                'deskripsi' => 'Dzikir, Pikir, Amal Shaleh',
                'link' => 'https://www.instagram.com/',
                'gambar' => 'banner_update_-1684700286.jpeg',
                'created_at' => '2023-05-25 09:54:59',
                'updated_at' => '2023-05-25 09:54:59',
            ),
        ));
        
        
    }
}