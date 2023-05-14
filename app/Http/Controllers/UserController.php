<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use App\Models\Rayon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use RealRashid\SweetAlert\Facades\Alert;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $count_user = User::count();
        if ($request->has('search')) {
            $user = User::where('username', 'LIKE', '%'.$request->search.'%')
                          ->orwhere('rayon', 'LIKE', '%'.$request->search.'%')
                          ->orwhere('name', 'LIKE', '%'.$request->search.'%')
                          ->orwhere('nim', 'LIKE', '%'.$request->search.'%')
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
          $user = User::Where('username','LIKE','%'.$request->search.'%')
                      ->orWhere('name','LIKE','%'.$request->search.'%')
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
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
        return view('admin.user.edit', compact('user', 'role', 'rayon'));
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
}
