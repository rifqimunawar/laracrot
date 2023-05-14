<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Galeri;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class StatistikController extends Controller
{
    public function index(Request $request)
    {
    $user_count = User::count(); //total pendaftar aplikasi
    $roles = [1, 2, 3]; //role untuk user admin dan superadmin
    $user_anggota_count = User::whereIn('role_id', $roles)->count(); //total anggota dengan role 123
    $user_unmapaba = User::where('kaderisasi', 'Belum Mapaba')->count(); //total pengguna yang belum mapaba

    $user_pkn = User::where('kaderisasi', 'pkn')->count(); //total pengguna yang sudah pkn

    $pkl = ['PKL', 'PKN']; //total pkl adalah yang sudah pkl ditambah pkn
    $user_pkl = User::whereIn('kaderisasi', $pkl)->count(); //total pkl
    
    $pkd = ['PKD', 'PKL', 'PKN']; //total pkd adalah yang sudah pkd ditambah pkl dan pkn
    $user_pkd = User::whereIn('kaderisasi', $pkd)->count(); //total pkd

    $mapaba = ['Mapaba', 'PKD', 'PKL', 'PKN']; //total mapaba ditambah pkd pkl dan pkn
    $user_mapaba = User::whereIn('kaderisasi', $mapaba)->count(); //total mapaba

    $user_kelamin_l = User::where('kelamin', 'L')->count();
    $user_kelamin_p = User::where('kelamin', 'P')->count();
    $user_rayon_1 = User::where('rayon_id', '1')->count();
    $user_rayon_2 = User::where('rayon_id', '2')->count();
    $user_rayon_3 = User::where('rayon_id', '3')->count();
    $user_rayon_4 = User::where('rayon_id', '4')->count();
    $user_rayon_5 = User::where('rayon_id', '5')->count();
    $user_rayon_6 = User::where('rayon_id', '6')->count();

    $mapaba_sebelum_2018 = User::where('thn_mapaba', 'Sebelum 2018')->count(); //total mapaba sebelum 2018
    $mapaba_2018 = User::where('thn_mapaba', '2018')->count(); //total mapaba di tahun 2018
    $mapaba_2019 = User::where('thn_mapaba', '2019')->count(); //total mapaba di tahun 
    $mapaba_2020 = User::where('thn_mapaba', '2020')->count(); //total mapaba di tahun 
    $mapaba_2021 = User::where('thn_mapaba', '2021')->count(); //total mapaba di tahun 
    $mapaba_2022 = User::where('thn_mapaba', '2022')->count(); //total mapaba di tahun 
    $mapaba_2023 = User::where('thn_mapaba', '2023')->count(); //total mapaba di tahun 

    // data kader yang belum di verifikasi 
    $kader = User::where('role_id', 4)->take(10)->get();

    // Data Gambar yang belum di verifikasi
    $galeri = Galeri::latest()->where('status', 0)->take(10)->get();

    // dd($kader);
    //mapaba adalah jumlah orng yang sudah mabapa, pkd dan pkl, karena yang sudha pkd pasti sudah mapaba
      return view('admin.index', compact(
        'galeri',
        'kader', 
        'user_count', 
        'user_anggota_count',
        'user_unmapaba',
        'user_mapaba',
        'user_pkd',
        'user_pkl',
        'user_pkn',
        'user_kelamin_l', 
        'user_kelamin_p',
        'user_rayon_1',
        'user_rayon_2',
        'user_rayon_3',
        'user_rayon_4',
        'user_rayon_5',
        'user_rayon_6',
        'mapaba_sebelum_2018',
        'mapaba_2018',
        'mapaba_2019',
        'mapaba_2020',
        'mapaba_2021',
        'mapaba_2022',
        'mapaba_2023',
      ));
    }
}
