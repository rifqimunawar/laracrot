<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Galeri;
use App\Models\Perpus;
use App\Models\Post;
use App\Models\Tag;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;
use RealRashid\SweetAlert\Facades\Alert;

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
        return view('user.profile', compact('user', 'categories', 'tags'));
    }

    

    public function account( Request $request)
    {
        $categories = Category::pluck('title', 'id')->all();
        $tags = Tag::pluck('title', 'id')->all();
        $user = User ::all();
        $user=Auth::user();
        // ddd($user);
        return view('user.account', compact('user', 'categories', 'tags'));
    }
    public function update(Request $request)
    {
        $user = Auth::user();
        $user->fill($request->only(['alamat', 'wa', 'email', 'twitter', 'fb', 'ig', 'kelamin'])); //ini hasil refactor dari chat gpt agar codingan lebih ringkas
    
        if ($request->hasFile('img')) {
            $extension = $request->img->getClientOriginalExtension();
            $newFileName = 'profile' . '_' . $user->username . '-' . now()->timestamp . '.' . $extension;
            $request->file('img')->storeAs('img', $newFileName);
            $user->img = $newFileName;
        }
    
        $user->save();
    
        Alert::success('Mantap Sahabat', 'Profile Anda Sudah Di Perbaharui');
        return redirect('/profile')->with('user', $user);
    }
    
    
    public function uploads(Request $request)
    {
        $categories = Category::pluck('title', 'id')->all();
        $tags = Tag::pluck('title', 'id')->all();
        $user = Auth::user();
        $postCount = Post::where('user_id', $user->id)
                          ->where('active', 1)
                          ->count();
        $galeriCount = Galeri::where('user_id', $user->id)
                          ->where('status', 1)
                          ->count();
        $perpusCount = Perpus::where('user_id', $user->id)
                          ->count();
        
        return view('user.uploads', compact('user', 'categories', 'tags', 'postCount', 'perpusCount', 'galeriCount'));
    }
    

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'judul' => 'required',
            'img' => 'required|image:gif,png,jpg,jpeg|max:5048'
        ]);
    
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
    
        $galeri = new Galeri();
        $galeri->user_id = Auth::user()->id;
        $galeri->judul = $request->judul;
    
        if ($request->hasFile('img')) {
            $extension = $request->file('img')->getClientOriginalExtension();
            $newFileName = 'galeri' . '_' . $request->nama . '-' . now()->timestamp . '.' . $extension;
            $request->file('img')->storeAs('/img', $newFileName);
            $galeri->img = $newFileName;
        }
    
        $galeri->save();
    
        Alert::success('Mantap Sahabat', 'Gambar Berhasil Ditambahkan');
        return redirect('/profile')->with('success', 'Gambar Berhasil Ditambahkan');
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


    // profile user lain 

    public function profile($slug, Request $request)
    {
        $user=Auth::user();
        $profile = User::where('slug', $slug)->firstOrFail();
        $profileposts = Post::where('user_id', '=', $profile->id)
                            ->with('category', 'comments', 'user')
                            ->where('active', 1)
                            ->orderBy('created_at', 'desc')
                            ->get();
        $profilegaleri = Galeri::where('user_id', $profile->id)
                            ->where('status', 1)
                            ->get();
        $profileperpus = Perpus::where('user_id', $profile->id)
                            ->get();

    // dd($profileperpus);
        return view('user.profileuser', compact(
          'user', 
          'profile', 
          'profileposts', 
          'profilegaleri',
          'profileperpus',
        ));
    }
    
}
