<?php

namespace App\Http\Controllers;

use App\Models\Home;
use App\Models\User;
use App\Models\Galeri;
use App\Models\Quotes;
use App\Models\carausal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Validator;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        $user=Auth::user();
        $home = Home::all();
        $galeries = Galeri::with('user')->where('status', 1)->latest()->take(3)->get();
        $quotes = Quotes::latest()->take(5)->get();

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
        return view('/user/home', compact([
          'home', 
          'user',
          'quotes',
          'galeries', 
          'user_mapaba', 
          'user_pkd', 
          'user_pkl', 
          'user_pkn',
          'mapaba_sebelum_2018',
          'mapaba_2018',
          'mapaba_2019',
          'mapaba_2020',
          'mapaba_2021',
          'mapaba_2022',
          'mapaba_2023',
          'user_kelamin_l', 
          'user_kelamin_p',
          'user_rayon_1',
          'user_rayon_2',
          'user_rayon_3',
          'user_rayon_4',
          'user_rayon_5',
          'user_rayon_6',
        ]));
    }




    // conrolller halaman admin================================
    public function admin_page(Request $request)
    {
        $pages = Home::all();
        return view('admin/page/index', compact(['pages']));
    }
    public function edit($id)
    {
        $pages = Home::find($id);
        return view('admin/page/edit', compact((['pages'])));
    }

    public function update($id, Request $request)
    {
      $pagesToUpdate = Home::findOrFail($id);
    
      $pagesData = $request->all();
      if ($request->gambar) {
        $extension = $request->gambar->getClientOriginalExtension();
        $newFileName = 'banner_update' . '_' . $request->name . '-' . now()->timestamp . '.' . $extension;
        $request->file('gambar')->move(public_path('/storage/img'), $newFileName);
        $pagesData['gambar'] = $newFileName;
      }
    
      $pagesToUpdate->update($pagesData);
    
      Alert::success('Mantap Sahabat', 'Banner Berhasil Di Ubah');
      return redirect('/admin/page');
    }
}
