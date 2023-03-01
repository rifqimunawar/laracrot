<?php

namespace App\Http\Controllers;

use App\Models\Perpus;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Http\RedirectResponse;

class PerpusController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        return view('/user/perpus', [
            // "title"=>"Perpustakaan"
            "perpus" => Perpus::latest()->get()
        ]);
    }


    public function admin_index(Request $request)
    {
        $perpus = Perpus::all();
        return view('admin/perpus/index', compact('perpus'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        return view('admin.perpus.create');
    }

    // /**
    //  * Store a newly created resource in storage.
    //  */
    // public function store(Request $request): RedirectResponse
    // {
    //     //
    // }

    // /**
    //  * Display the specified resource.
    //  */
    // public function show(string $id): Response
    // {
    //     //
    // }

    // /**
    //  * Show the form for editing the specified resource.
    //  */
    // public function edit(string $id): Response
    // {
    //     //
    // }

    // /**
    //  * Update the specified resource in storage.
    //  */
    // public function update(Request $request, string $id): RedirectResponse
    // {
    //     //
    // }

    /**
     * Remove the specified resource from storage.
     */
    public function admin_destroy($id)
    {
        $perpus = Perpus::findOrFail($id);
        $perpus->delete();
        return redirect('/admin/perpus');
    }
}
