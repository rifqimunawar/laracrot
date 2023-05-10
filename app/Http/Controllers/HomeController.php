<?php

namespace App\Http\Controllers;

use App\Models\Home;
use App\Models\User;
use App\Models\Galeri;
use App\Models\Quotes;
use App\Models\carausal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        $user=Auth::user();
        $home = Home::all();
        $galeries = Galeri::latest()->take(3)->get();
        $quotes = Quotes::latest()->take(5)->get();

        $user_pkn = User::where('kaderisasi', 'pkn')->count(); //total pengguna yang sudah pkn
        $pkl = ['PKL', 'PKN']; //total pkl adalah yang sudah pkl ditambah pkn
        $user_pkl = User::whereIn('kaderisasi', $pkl)->count(); //total pkl
        $pkd = ['PKD', 'PKL', 'PKN']; //total pkd adalah yang sudah pkd ditambah pkl dan pkn
        $user_pkd = User::whereIn('kaderisasi', $pkd)->count(); //total pkd
        $mapaba = ['Mapaba', 'PKD', 'PKL', 'PKN']; //total mapaba ditambah pkd pkl dan pkn
        $user_mapaba = User::whereIn('kaderisasi', $mapaba)->count(); //total mapaba
        return view('/user/home', compact([
          'home', 
          'user',
          'quotes',
          'galeries', 
          'user_mapaba', 
          'user_pkd', 
          'user_pkl', 
          'user_pkn',
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
        $pages = Home::find($id);
        $validator = Validator::make($request->all(), [
            'judul' => 'required',
            'deskripsi' => 'required',
            'link' => 'required',
            'gambar' => 'required', 'simtimes|image:png,jpg,jpeg',
        ]);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $pages = Home::findOrFail($id);
        $pages->judul = $request->judul;
        $pages->deskripsi = $request->deskripsi;
        $pages->link = $request->link;

        $pages->update();
        if ($request->gambar) {
            $extension = $request->gambar->getClientOriginalExtension();
            $newFileName = 'home' . '_' . $request->home . '-' . now()->timestamp . '.' . $extension;
            $request->file('gambar')->move(public_path('/storage/img'), $newFileName);
            $pages['gambar'] = $newFileName;
            $pages->update();
        }
        $pages->save();

        // return view('admin/page/edit', compact((['pages'])));
        return (view('/admin/page/edit', compact((['pages']))));
    }
}
