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
        'img' => 'quotes_update_Soe Hok Gie-1684701036.jpg',
        'name' => 'Soe Hok Gie',
        'who' => 'Aktivis Orde Lama',
        'quote' => 'Hidup adalah keberanian menghadapi tanda tanya.',
        'created_at' => date("Y-m-d H:i:s"),
        'updated_at' => date("Y-m-d H:i:s"),
    ]);
      DB::table('quotes')->insert([
        'img' => 'quotes_update_Khalil Gibran-1684701466.jpeg',
        'name' => 'Khalil Gibran',
        'who' => 'Seniman, Penyair, Penulis',
        'quote' => 'Apa saja yang membakar dan membuat orang lain terbakar adalah berguna.,
        apa itu? cinta',
        'created_at' => date("Y-m-d H:i:s"),
        'updated_at' => date("Y-m-d H:i:s"),
    ]);
    }
}
