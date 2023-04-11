<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Galeri;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Storage;
use function PHPUnit\Framework\callback;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Validator;

class GaleriController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $user=Auth::user();
        $galeri = Galeri :: with ('user')->latest()->get();
        // dd($galeri);
        return view('user.galeri', compact(['galeri', 'user']));
    }

    public function admin_index(Request $request)
    {
        $galeri = Galeri::latest()->get();
        $user=Auth::user();
        return view('admin.galeri.index', compact(['galeri', 'user']));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function admin_create(Request $request)
    {
        return view('admin.galeri.create');
    }


    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'judul' => 'required',
            'img' => 'required', 'simtimes|image:gif,png,jpg,jpeg|max:5048 '
        ]);

        $galeri = $request->all();
        $galeri['user_id'] = Auth::user()->id;


        if ($request->img) {
            $extension = $request->img->getClientOriginalExtension();
            $newFileName = 'galeri' . '_' . $request->nama . '-' . now()->timestamp . '.' . $extension;
            $request->file('img')->storeAs('/img', $newFileName);
            $galeri['img'] = $newFileName;
        }
        $galeri = Galeri::create($galeri);
        Alert::success('Mantap Sahabat', 'Gambar Berhasil Ditambahkan');
        return redirect('/admin/galeri/');
    }





    // if ($galeri['galeri']) {
    //     $request->file('galeri')->storeAs('/uploads', $galeri);
    // }

    // $galeri = Galeri::create($galeri);

    // return view('admin.galeri.create')->with('success', 'Post created successfully!');
    // }

    // /**
    //  * Display the specified resource.
    //  */
    // public function show(Galeri $galeri): Response
    // {
    //     //
    // }

    // /**
    //  * Show the form for editing the specified resource.
    //  */
    // public function edit(Galeri $galeri): Response
    // {
    //     //
    // }

    // /**
    //  * Update the specified resource in storage.
    //  */
    // public function update(Request $request, Galeri $galeri): RedirectResponse
    // {
    //     //
    // }

    /**
     * Remove the specified resource from storage.
     */
    public function admin_destroy($id)
    {
        $galeri = Galeri::findOrFail($id);
        $galeri->delete();
        Alert::success('Mantap Sahabat', 'Gambar Berhasil Dihapus');
        return redirect('/admin/galeri/');
    }
}
