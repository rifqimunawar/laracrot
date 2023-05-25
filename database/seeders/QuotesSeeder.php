<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class QuotesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
      DB::table('quotes')->insert([
        'img' => 'user.png',
        'name' => 'rifqi',
        'who' => 'penakluk zeus',
        'quote' => 'sakirana cinta ngahalangan kaderisasi!!!!! 
        TINGGALKAN!!!!!!!!',
        'created_at' => date("Y-m-d H:i:s"),
        'updated_at' => date("Y-m-d H:i:s"),
    ]);
      DB::table('quotes')->insert([
        'img' => '1 (6).jpg',
        'name' => 'munawar',
        'who' => 'penakluk hati wanita',
        'quote' => 'lebih sulit dari filsafat lebih rumit dari codingan,
        apa itu? cinta',
        'created_at' => date("Y-m-d H:i:s"),
        'updated_at' => date("Y-m-d H:i:s"),
    ]);
      DB::table('quotes')->insert([
        'img' => '1 (5).jpg',
        'name' => 'rifqi',
        'who' => 'penakluk zeus',
        'quote' => 'sakirana cinta ngahalangan kaderisasi!!!!! 
        TINGGALKAN!!!!!!!!',
        'created_at' => date("Y-m-d H:i:s"),
        'updated_at' => date("Y-m-d H:i:s"),
    ]);
    }
}
