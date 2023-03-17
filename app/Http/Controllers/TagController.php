<?php

namespace App\Http\Controllers;

use App\Models\tag;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class TagController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tags=Tag::all();
        return view('admin.tag.index', compact('tags'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.tag.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Alert::success('Mantap Sahabat', 'Tag Berhasil Ditambahkan');
        Tag::create ($request->except(['_token']));
        return redirect('/admin/blog/tag');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id, Request $request)
    {
        $edit=Tag::findOrFail($id);
        return view('admin.tag.edit', compact('edit'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        Alert::success('Mantap Sahabat', 'Tag Berhasil Diupdate');
        $update = Tag::find($id);
        $update->name = $request->name;
        $update->update();
        return redirect('/admin/blog/tag');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $tag = Tag::findOrFail($id);
        $tag->delete();
        return redirect('/admin/blog/tag');
    }
}
