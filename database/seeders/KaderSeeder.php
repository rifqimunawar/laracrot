<?php

namespace Database\Seeders;

use App\Models\Kader;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KaderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // DB::table('kader')->insert([
        //     'nama' => 'rifqi',
        //     'alamat' => 'cianjur',
        //     'nim' => '410370006211013',
        //     'jenis_kelamin' => 'L',
        //     't_lahir' => 'cianjur',
        //     'ttl' => '12, 11, 2001',
        //     'wa' => '085161145097',
        //     'sma' => 'MAN 2 Kota Bandung',
        //     'thn_lulus' => '2020',
        //     'pesantren' => 'An-Nuur',
        //     'thn_kuliah' => '2021',
        //     'fakultas' => 'teknik',
        //     'jurusan' => 'teknik informatika',
        //     'thn_mapaba' => '2021',
        //     'penyelenggara_mapaba' => '2021',
        //     'thn_pkd' => '2023',
        //     'thn_pkl' => '2023',
        //     'thn_pkn' => '2032',
        //     'informal' => 'sekolah kepelatihan',
        //     'penyelenggara_informal' => 'sekolah kepelatihan',
        //     'penyelenggara_nonformal' => 'sekolah kepelatihan',
        //     'photo' => 'sghina1.jpg',

        //     // 'created_at' => date('Y-m-d H:i:s'),
        //     // 'updated_at' => date('Y-m-d H:i:s')
        // ]);
        // DB::table('kader')->insert([
        //     'nama' => 'sginaa',
        //     'alamat' => 'cianjur',
        //     'nim' => '410370006211013',
        //     'jenis_kelamin' => 'L',
        //     't_lahir' => 'cianjur',
        //     'ttl' => '12, 11, 2001',
        //     'wa' => '085161145097',
        //     'sma' => 'MAN 2 Kota Bandung',
        //     'thn_lulus' => '2020',
        //     'pesantren' => 'An-Nuur',
        //     'thn_kuliah' => '2021',
        //     'fakultas' => 'teknik',
        //     'jurusan' => 'teknik informatika',
        //     'thn_mapaba' => '2021',
        //     'penyelenggara_mapaba' => '2021',
        //     'thn_pkd' => '2023',
        //     'thn_pkl' => '2023',
        //     'thn_pkn' => '2032',
        //     'informal' => 'sekolah kepelatihan',
        //     'penyelenggara_informal' => 'sekolah kepelatihan',
        //     'penyelenggara_nonformal' => 'sekolah kepelatihan',
        //     'photo' => 'sghina1.jpg',
        //     // 'created_at' => date('Y-m-d H:i:s'),
        //     // 'updated_at' => date('Y-m-d H:i:s')
        // ]);
        // DB::table('kader')->insert([
        //     'nama' => 'munawar ridwan',
        //     'alamat' => 'cianjur',
        //     'nim' => '410370006211013',
        //     'jenis_kelamin' => 'L',
        //     't_lahir' => 'cianjur',
        //     'ttl' => '12, 11, 2001',
        //     'wa' => '085161145097',
        //     'sma' => 'MAN 2 Kota Bandung',
        //     'thn_lulus' => '2020',
        //     'pesantren' => 'An-Nuur',
        //     'thn_kuliah' => '2021',
        //     'fakultas' => 'teknik',
        //     'jurusan' => 'teknik informatika',
        //     'thn_mapaba' => '2021',
        //     'penyelenggara_mapaba' => '2021',
        //     'thn_pkd' => '2023',
        //     'thn_pkl' => '2023',
        //     'thn_pkn' => '2032',
        //     'informal' => 'sekolah kepelatihan',
        //     'penyelenggara_informal' => 'sekolah kepelatihan',
        //     'penyelenggara_nonformal' => 'sekolah kepelatihan',
        //     'photo' => 'sghina1.jpg',
        //     // 'created_at' => date('Y-m-d H:i:s'),
        //     // 'updated_at' => date('Y-m-d H:i:s')
        // ]);
        // DB::table('kader')->insert([
        //     'nama' => 'elis',
        //     'alamat' => 'cianjur',
        //     'nim' => '410370006211013',
        //     'jenis_kelamin' => 'L',
        //     't_lahir' => 'cianjur',
        //     'ttl' => '12, 11, 2001',
        //     'wa' => '085161145097',
        //     'sma' => 'MAN 2 Kota Bandung',
        //     'thn_lulus' => '2020',
        //     'pesantren' => 'An-Nuur',
        //     'thn_kuliah' => '2021',
        //     'fakultas' => 'teknik',
        //     'jurusan' => 'teknik informatika',
        //     'thn_mapaba' => '2021',
        //     'penyelenggara_mapaba' => '2021',
        //     'thn_pkd' => '2023',
        //     'thn_pkl' => '2023',
        //     'thn_pkn' => '2032',
        //     'informal' => 'sekolah kepelatihan',
        //     'penyelenggara_informal' => 'sekolah kepelatihan',
        //     'penyelenggara_nonformal' => 'sekolah kepelatihan',
        //     'photo' => 'sghina1.jpg',
        //     // 'created_at' => date('Y-m-d H:i:s'),
        //     // 'updated_at' => date('Y-m-d H:i:s')
        // ]);





        // ======================pengisian mengguanakn faker factory 
        Kader::factory()->count(100)->create();
    }
}
