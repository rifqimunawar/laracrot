<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PengurusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
      DB::table('penguruses')->insert([
        'name' => 'Riki Ramdan',
        'username'=>'rikiramdan',
        'img' => 'user.png',
        'jabatan' => 'Ketua PMII Komisariat uninus',
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
    ]);
    }
}
