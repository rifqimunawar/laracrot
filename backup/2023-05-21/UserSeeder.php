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
            'name' => 'Rifqi Munawar',
            'username' => 'rifqi_munawar',
            'bio' => 'biografi saa',
            'slug' => 'rifqi_munawar',
            'role_id' => '1',
            'email' => 'rifqimunawar@gmail.com',
            'kelamin' => 'L',
            'nim' => '1',
            'centang' => '1',
            'rayon_id' => '1',
            'password' => bcrypt('rifqimunawar'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('users')->insert([
            'name' => 'Superadmin',
            'username' => 'superadmin',
            'bio' => 'dzikir pikir amal shaleh',
            'slug' => 'admin',
            'role_id' => '2',
            'email' => 'superadmin@gmail.com',
            'kelamin' => 'P',
            'nim' => '2',
            'rayon_id' => '2',
            'password' => bcrypt('superadmin'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('users')->insert([
            'name' => 'admin',
            'username' => 'admin',
            'bio' => 'saya akan segera pkd',
            'slug' => 'admin',
            'role_id' => '2',
            'email' => 'admin@gmail.com',
            'kelamin' => 'L',
            'nim' => '4',
            'rayon_id' => '3',
            'password' => bcrypt('admin'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('users')->insert([
            'name' => 'user',
            'username' => 'user',
            'slug' => 'user',
            'role_id' => '3',
            'email' => 'user@gmail.com',
            'kelamin' => 'L',
            'nim' => '5',
            'rayon_id' => '6',
            'password' => bcrypt('user'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('users')->insert([
            'name' => 'pengunjung',
            'username' => 'pengunjung',
            'slug' => 'pengunjung',
            'role_id' => '4',
            'email' => 'pengunjung@gmail.com',
            'kelamin' => 'L',
            'nim' => '6',
            'rayon_id' => '6',
            'password' => bcrypt('pengunjung'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        User::factory()->count(200)->create();
    }
}
