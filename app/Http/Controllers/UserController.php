<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use App\Models\Rayon;
use Illuminate\Http\Request;
use Laravolt\Indonesia\Models\Province;
use App\Http\Controllers\Controller;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $count_user = User::count();
        if ($request->has('search')) {
            $user = User::where('username', 'LIKE', '%' . $request->search . '%')
                //   ->orwhere('rayon', 'LIKE', '%'.$request->search.'%')
                ->orwhere('name', 'LIKE', '%' . $request->search . '%')
                ->orwhere('nim', 'LIKE', '%' . $request->search . '%')
                ->paginate(25);
        } else {
            $user = User::with('rayon')->latest()->paginate(25);
        }

        $first_item = ($user instanceof \Illuminate\Pagination\LengthAwarePaginator) ? $user->firstItem() : $user->first();

        return view('admin.user.index', compact('user', 'count_user', 'first_item'));
    }

    public function list($slug, Request $request)
    {
        $rayon = Rayon::where('slug', $slug)
            ->with('users')
            ->latest()
            ->paginate(25);

        if ($request->has('search')) {
            $user = User::Where('username', 'LIKE', '%' . $request->search . '%')
                ->orWhere('name', 'LIKE', '%' . $request->search . '%')
                ->get();
        } else {
            $user = User::with('rayon')->latest()->paginate(25);
            $count_user = User::count();
        }

        return view('admin.rayon.show', compact('rayon', 'user'));
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $user = Auth();

        $provinsi = Province::all()->sortBy('name')->pluck('name', 'id');
        $route_get_kota = route('get.kota');
        $route_get_kecamatan = route('get.kecamatan');
        $route_get_kelurahan = route('get.kelurahan');

        return view('admin.user.create', compact('provinsi', 'route_get_kota', 
        'route_get_kecamatan', 'route_get_kelurahan', 'user'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Rule validasi
        $rules = [
          'name' => 'required',
          'nim' => 'required|min:14|unique:users,nim|numeric',
          'alamat' => 'required',
          't_lahir' => 'required',
          'kelamin' => 'required',
      ];
  
      $messages = [
        'name.required' => 'Nama wajib diisi.',
        'kelamin.required' => 'Jenis Kelamin wajib diisi.',
        'name.alpha' => 'Nama Harus Huruf doang Tolol!!!',
        'nim.required' => 'Nim wajib diisi.',
        'nim.unique' => 'Nim sudah digunakan.',
        'nim.min' => 'Nim kurang anjing minimal 14 Angka goblok.',
        'nim.numeric' => 'Nim Harus Angka Anjing!!!',
        'alamat.required' => 'Alamatnya di isi dong bodo.',
        't_lahir.required' => 'Tulis nama kota kelahirnya. TOLOL!!!.',
    ];
  
      // Validasi input
      $validator = Validator::make($request->all(), $rules, $messages);
  
      if ($validator->fails()) {
          return redirect()->back()->withErrors($validator)->withInput();
      }

      // dd($request);

      $request = User::create($request->all());

  Alert::success('Mantap Sahabat', 'Kader Berhasil Ditambahkan');
  return redirect()->route('user.index');
  }
    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id, User $user)
    {
        $user = User::find($id);
        $role = Role::find($user->role_id);
        $rayon = Rayon::find($user->rayon_id);
        $provinsi = Province::all()->sortBy('name')->pluck('name', 'id');
        $route_get_kota = route('get.kota');
        $route_get_kecamatan = route('get.kecamatan');
        $route_get_kelurahan = route('get.kelurahan');

        // dd($user);
        return view('admin.user.edit', compact('user', 'role', 
        'rayon', 'provinsi', 'route_get_kota', 
        'route_get_kecamatan', 'route_get_kelurahan',));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update($id, Request $request)
    {
        $userToUpdate = User::findOrFail($id);

        $userData = $request->all();
        if ($request->img) {
            $extension = $request->img->getClientOriginalExtension();
            $newFileName = 'user' . '_' . $request->username . '-' . now()->timestamp . '.' . $extension;
            $request->file('img')->move(public_path('/storage/img'), $newFileName);
            $userData['img'] = $newFileName;
        }

        $userToUpdate->update($userData);

        Alert::success('Mantap Sahabat', 'User Berhasil Di Update');
        return redirect('/admin');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        //
    }

    public function administrator(Request $request)
    {
        $administrator = User::whereIn('role_id', [1, 2])->latest()->paginate(10);
        return view('admin.administrator.index', compact('administrator'));
    }

    public function kadermapaba(Request $request)
    {
        $kadermapaba = User::whereIn('kaderisasi', ['Mapaba', 'PKD', 'PKL', 'PKN'])->latest()->paginate(10);
        return view('admin.user.mapaba', compact('kadermapaba'));
    }

    public function kaderpkd(Request $request)
    {
        $kaderpkd = User::whereIn('kaderisasi', ['PKD', 'PKL', 'PKN'])->latest()->paginate(10);
        return view('admin.user.pkd', compact('kaderpkd'));
    }
    public function kaderpkl(Request $request)
    {
        $kaderpkl = User::whereIn('kaderisasi', ['PKL', 'PKN'])->latest()->paginate(10);
        return view('admin.user.pkl', compact('kaderpkl'));
    }
    public function kaderpkn(Request $request)
    {
        $kaderpkn = User::where('kaderisasi', 'PKN')->latest()->paginate(10);
        return view('admin.user.pkn', compact('kaderpkn'));
    }

    public function unverification(Request $request)
    {
        // data kader yang belum di verifikasi 
        $unverification = User::where('role_id', 4)->paginate(10);
        return view('admin.user.unverification', compact('unverification'));
    }
    public function bukankader(Request $request)
    {
        // data kader yang belum di verifikasi 
        $bukankader = User::where('role_id', 5)->paginate(10);
        return view('admin.user.bukankader', compact('bukankader'));
    }
}
