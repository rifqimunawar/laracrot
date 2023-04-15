<?php

namespace App\Http\Controllers;

use App\Models\Rayon;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RayonController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $rayon = Rayon ::with('users')
        ->latest()
        ->get();

        return view('admin.rayon.index', compact('rayon'));
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
    public function show(Rayon $rayon)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Rayon $rayon)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Rayon $rayon)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Rayon $rayon)
    {
        //
    }
}
