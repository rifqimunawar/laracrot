<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class BlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('blog')->insert([
            'judul' => 'ini post pertama',
            'slug' => 'ini post pertama',
            'body' => 'lorem dan bla bla',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('blog')->insert([
            'judul' => 'ini post kedua',
            'slug' => 'ini post kedua',
            'body' => 'lorem dan yang kedua bla bla',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('blog')->insert([
            'judul' => 'ini post ketiga',
            'slug' => 'ini post ketiga',
            'body' => 'lorem dan yang kedua bla bla',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('blog')->insert([
            'judul' => 'ini post keempat',
            'slug' => 'ini post keempat',
            'body' => 'lorem dan yang kedua bla bla',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('blog')->insert([
            'judul' => 'ini post kelima',
            'slug' => 'ini post kelima',
            'body' => 'lorem dan yang kedua bla bla',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
    }
}
