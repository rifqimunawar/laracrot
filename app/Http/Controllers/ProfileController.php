<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use App\Models\Post;
// use Illuminate\Http\RedirectResponse;
// use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Inertia\Inertia;
use App\Models\Galeri;
use App\Models\Perpus;
use App\Models\Category;
use App\Models\CategoryBook;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\RedirectResponse;
use Laravolt\Indonesia\Models\City;
use Laravolt\Indonesia\Models\District;
use Laravolt\Indonesia\Models\Province;
use Illuminate\Support\Facades\Redirect;
use Inertia\Response as ResponseInertia;
use Laravolt\Indonesia\Models\Village;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Validator;
use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Contracts\Auth\MustVerifyEmail;

class ProfileController extends Controller
{
    /**
     * Display the user's profile form.
      */
    // public function edit(Request $request): Response
    // {
    //     return Inertia::render('Profile/Edit', [
    //         'mustVerifyEmail' => $request->user() instanceof MustVerifyEmail,
    //         'status' => session('status'),
    //     ]);
    // }

    // /**
    //  * Update the user's profile information.
    //  */
    // public function update(ProfileUpdateRequest $request): RedirectResponse
    // {
    //     $request->user()->fill($request->validated());

    //     if ($request->user()->isDirty('email')) {
    //         $request->user()->email_verified_at = null;
    //     }

    //     $request->user()->save();

    //     return Redirect::route('profile.edit');
    // }

    // /**
    //  * Delete the user's account.
    //  */
    // public function destroy(Request $request): RedirectResponse
    // {
    //     $request->validate([
    //         'password' => ['required', 'current_password'],
    //     ]);

    //     $user = $request->user();

    //     Auth::logout();

    //     $user->delete();

    //     $request->session()->invalidate();
    //     $request->session()->regenerateToken();

    //     return Redirect::to('/');
    // }


    public function index( Request $request)
    {
      $profile = Auth::user();
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
      // menghitung jumlah postingan gambar dan buku yang di upload users 
      $countpost = Post::where('user_id', '=', $profile->id)
                        ->where('active', 1)
                        ->count();
      $countgaleri = Galeri::where('user_id', '=', $profile->id)
                        ->where('status', 1)
                        ->count();
      $countperpus = Perpus::where('user_id', '=', $profile->id)
                        ->count();

    
        $categories = Category::pluck('title', 'id')->all();
        $tags = Tag::pluck('title', 'id')->all();
        $user=Auth::user();
        // dd($profile);
        return view('user.profile', compact(
          'tags', 
          'user', 
          'profile', 
          'countpost',
          'categories',
          'countgaleri',
          'countperpus',
          'profileposts', 
          'profilegaleri',
          'profileperpus',
        ));
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
        $user->fill($request->only([
          'alamat', 'wa', 'email', 
          'twitter', 'fb', 'ig', 'kelamin',
          'provinces', 'cities', 'districts', 
          'villages', 'bio', 't_lahir', 'ttl', 
          'hobi', 'sma', 'thn_lulus', 'thn_kuliah',
          
        ])); //ini hasil refactor dari chat gpt agar codingan lebih ringkas
    
        if ($request->hasFile('img')) {
            $extension = $request->img->getClientOriginalExtension();
            $newFileName = 'profile' . '_' . $user->username . '-' . now()->timestamp . '.' . $extension;
            $request->file('img')->move(public_path('/storage/img'), $newFileName);
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
        $category = CategoryBook::all();

        
          return view('user.uploads', compact(
            'user', 
            'tags', 
            'category', 
            'postCount', 
            'categories', 
            'perpusCount', 
            'galeriCount'));
    }
    
    public function newpassword(Request $request)
    {
      $request->validate([
          'current_password' => 'required',
          'new_password' => 'required|string|min:8|regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d).+$/',
          'reenter_password' => 'required|same:new_password',
      ]);

      $user = Auth::user();

      if (!Hash::check($request->input('current_password'), $user->password)) {
          return redirect()->back()->withErrors(['current_password' => 'The provided password does not match your current password.']);
      }

      $user->password = Hash::make($request->input('new_password'));
      $user->save();

      return redirect()->back()->with('Mantap Sahabat', 'Password Berhasil Diubah.');
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
            $request->file('img')->move(public_path('/storage/img'), $newFileName);
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
            $request->file('image')->move(public_path('/storage/img'), $newFileName);
            $data['image'] = $newFileName;
        }

        $post = Post::create($data);
        $post->tags()->sync($request->tags);

        Alert::success('Mantap Sahabat', 'Postingan akan ditinjau terlebih dahulu oleh admin');

        return redirect('/profile');
    }

    public function storeperpus(Request $request)
    {
      $perpus = $request->all();
      $perpus['user_id'] = Auth::user()->id;

        if ($request->image) {
            $extension = $request->image->getClientOriginalExtension();
            $newFileName = 'perpus' . '_' . $request->nama . '-' . now()->timestamp . '.' . $extension;
            $request->file('image')->move(public_path('/storage/img'), $newFileName);
            $perpus['image'] = $newFileName;
        }

        if ($request->pdf) {
            $extension = $request->pdf->getClientOriginalExtension();
            $newFileName = 'perpus' . '_' . $request->nama . '-' . now()->timestamp . '.' . $extension;
            $request->file('pdf')->move(public_path('/storage/pdf'), $newFileName);
            $perpus['pdf'] = $newFileName;
        }
        $perpus = Perpus::create($perpus);
    // dd($perpus);


        Alert::success('Mantap Sahabat', 'File Berhasil Ditambahkan');
        return redirect('/profile');
    }


    // detail user 
    public function details($id, Request $request)
    {
        $users = User::findOrFail($id);     // $user = User::all();
        $provinsi = Province::find($users->province_id);
        $city = City::find($users->city_id);
        $kecamatan = District::find($users->kecamatan_id);
        $kelurahan = Village::find($users->kelurahan_id);
        
        
        // dd($provinsi);
        return view('admin.user.detail', compact('users', 'provinsi', 'city',
      'kecamatan', 'kelurahan'));
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
      // menghitung jumlah postingan gambar dan buku yang di upload users 
      $countpost = Post::where('user_id', '=', $profile->id)
                        ->where('active', 1)
                        ->count();
      $countgaleri = Galeri::where('user_id', '=', $profile->id)
                        ->where('status', 1)
                        ->count();
      $countperpus = Perpus::where('user_id', '=', $profile->id)
                        ->count();

    // dd($profilegaleri);
        return view('user.profileuser', compact(
          'user', 
          'profile', 
          'countpost',
          'countgaleri',
          'countperpus',
          'profileposts', 
          'profilegaleri',
          'profileperpus',
        ));
    }
}