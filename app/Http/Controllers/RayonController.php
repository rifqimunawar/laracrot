<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Rayon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use RealRashid\SweetAlert\Facades\Alert;

class RayonController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $rayon = Rayon::with('users')
            ->latest()
            ->get();
        // dd($rayon);

        return view('admin.rayon.index', compact('rayon'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.rayon.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $rayon = $request->all();
        $rayon = Rayon::create($rayon);

        Alert::success('Mantap Sahabat', 'Rayon Berhasil Ditambahkan');
        return redirect('/admin/rayon');
    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request, $slug)
    {
        $rayon = Rayon::with(['users' => function ($query) {
            $query->whereIn('role_id', [1, 2, 3]);
        }])
            ->where('slug', $slug)
            ->paginate(25);

            if ($request->has('search')) {
              $user = User::where('username', 'LIKE', '%' . $request->search . '%')
                  //   ->orwhere('rayon', 'LIKE', '%'.$request->search.'%')
                  ->orwhere('name', 'LIKE', '%' . $request->search . '%')
                  ->orwhere('nim', 'LIKE', '%' . $request->search . '%')
                  ->paginate(25);
          } else {
              $user = User::with('rayon')->latest()->paginate(25);
          }
  

        return view('admin.rayon.show', compact('rayon', 'user'));
    }




    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $rayon = Rayon::findOrFail($id);

        return view('/admin/rayon/edit', compact('rayon'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update($id, Request $request)
    {
        $rayon = Rayon::find($id);
        $rayon->rayon = $request->rayon;
        $rayon->update();

        Alert::success('Mantap Sahabat', 'Rayon Berhasil Diubah');
        return redirect('/admin/rayon');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $rayon = rayon::findOrFail($id);
        $rayon->delete();
        Alert::success('Mantap Sahabat', 'Rayon Berhasil Dihapus');
        return redirect('/admin/rayon');
    }
}
