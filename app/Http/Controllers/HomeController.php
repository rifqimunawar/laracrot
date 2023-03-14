<?php

namespace App\Http\Controllers;

use App\Models\Home;
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
        return view('/user/home', compact(['home', 'user']));
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
            $request->file('gambar')->storeAs('/home', $newFileName);
            $pages['gambar'] = $newFileName;
            $pages->update();
        }
        $pages->save();

        // return view('admin/page/edit', compact((['pages'])));
        return (view('/admin/page/edit', compact((['pages']))));
    }
}
