<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Carbon;
use Illuminate\Database\Seeder;
use PhpParser\Node\Expr\Assign;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'name' => 'Aing Saha',
            'username' => 'adminsuper',
            'slug' => 'adminsuper',
            'role_id' => '1',
            'email' => 'superadmin@gmail.com',
            'kelamin'=>'L',
            'nim'=>'1',
            'rayon_id'=>'1',
            'password' => bcrypt('superadmin'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('users')->insert([
            'name' => 'Aing Maung',
            'username' => 'admin',
            'slug' => 'admin',
            'role_id' => '2',
            'email' => 'admin@gmail.com',
            'kelamin'=>'P',
            'nim'=>'2',
            'rayon_id'=>'2',
            'password' => bcrypt('admin'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('users')->insert([
            'name' => 'Aing Ucing',
            'username' => 'user',
            'slug' => 'user',
            'role_id' => '3',
            'email' => 'user@gmail.com',
            'kelamin'=>'L',
            'nim'=>'3',
            'rayon_id'=>'3',
            'password' => bcrypt('user'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        User::factory()->count(135)->create();
    }
}
