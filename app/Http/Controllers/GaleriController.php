<?php

namespace App\Http\Controllers;

use App\Models\Galeri;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Storage;

use function PHPUnit\Framework\callback;

class GaleriController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $galeri = Galeri ::latest()->get();
        
        // $galeri DB::table('galeri')
        //->sortBy(callback: 'create_at');
        // ->get();

        return view('user.galeri', compact(['galeri']));
    }

    public function admin_index(Request $request)
    {
        $galeri = Galeri::all()->sortBy(callback: 'created_at');
        return view('admin.galeri.index', compact(['galeri']));
    }



    /**
     * Show the form for creating a new resource.
     */
    public function admin_create(Request $request)
    {
        return view('admin.galeri.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function admin_store(Request $request)
    {

        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);

        $galeri = new Galeri();
        $galeri->judul = $request->judul;
        $galeri->save();
        if ($request->galeri) {
            $extension = $request->galeri->getClientOriginalExtension();
            $newFileName = 'galeri' . '_' . now()->timestamp . '.' . $extension;
            $request->file('galeri')->storeAs('/uploads', $newFileName);
            $galeri['galeri'] = $newFileName;
            $galeri->save();
        }

        // ddd($request);
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
        return redirect('/admin/galeri/');
    }
}
