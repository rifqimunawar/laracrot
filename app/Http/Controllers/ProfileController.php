<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Galeri;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Validator;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index( Request $request)
    {
        $user = User ::all();
        $user=Auth::user();
        // ddd($user);
        return view('user.profile', compact('user'));
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'judul' => 'required',
            'img' => 'required', 'simtimes|image:gif,png,jpg,jpeg|max:2048'
        ]);

        $galeri = $request->all();
        $galeri['user_id'] = Auth::user()->id;


        if ($request->img) {
            $extension = $request->img->getClientOriginalExtension();
            $newFileName = 'galeri' . '_' . $request->nama . '-' . now()->timestamp . '.' . $extension;
            $request->file('img')->storeAs('/img', $newFileName);
            $galeri['img'] = $newFileName;
        }
        Alert::success('Mantap Sahabat', 'Gambar Ditambahkan');
        return redirect('/profile');
    }

}
