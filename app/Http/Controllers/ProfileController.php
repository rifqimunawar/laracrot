<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use App\Models\Post;
use App\Models\User;
use App\Models\Galeri;
use App\Models\Perpus;
use App\Models\Category;
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
        $categories = Category::pluck('title', 'id')->all();
        $tags = Tag::pluck('title', 'id')->all();
        $user = User ::all();
        $user=Auth::user();
        // ddd($user);
        return view('user.profile', compact('user', 'categories', 'tags'));
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
        return redirect('/profile')->with('Mantap Sahabat', 'Gambar Berhasil Ditambahkan');
    }


    
    public function storepost(Request $request): RedirectResponse
    {
        $data = $request->all();
        $data['user_id'] = Auth::user()->id;

        if ($request->image) {
            $extension = $request->image->getClientOriginalExtension();
            $newFileName = 'blog' . '_' . $request->nama . '-' . now()->timestamp . '.' . $extension;
            $request->file('image')->storeAs('/img', $newFileName);
            $data['image'] = $newFileName;
        }

        $post = Post::create($data);
        $post->tags()->sync($request->tags);

        Alert::success('Mantap Sahabat', 'Berhasil Menambah Postingan');

        return redirect('/profile');
    }

    public function storeperpus(Request $request)
    {
        $perpus = $request->all();

        if ($request->image) {
            $extension = $request->image->getClientOriginalExtension();
            $newFileName = 'perpus' . '_' . $request->judul . '-' . now()->timestamp . '.' . $extension;
            $request->file('image')->storeAs('/img', $newFileName);
            $perpus['image'] = $newFileName;
        }

        if ($request->pdf) {
            $extension = $request->pdf->getClientOriginalExtension();
            $newFileName = 'perpus' . '_' . $request->judul . '-' . now()->timestamp . '.' . $extension;
            $request->file('pdf')->storeAs('/pdf', $newFileName);
            $perpus['pdf'] = $newFileName;
        }
        $perpus = Perpus::create($perpus);

        Alert::success('Mantap Sahabat', 'File Berhasil Ditambahkan');
        return redirect('/profile');
    }
}
