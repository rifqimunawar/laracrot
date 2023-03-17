<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;


class CategoryController extends Controller
{
    public function index(Request $request)
    {
        $category=Category::all();
        return view('admin.category.index', compact('category'));
    }
    public function create()
    {
        return view('admin.category.create');
    }
    public function store(Request $request)
    {
        Alert::success('Mantap Sahabat', 'Category Berhasil Ditambahkan');
        Category::create ($request->except(['_token']));
        return redirect('/admin/blog/category');
    }
    public function edit($id, Request $request)
    {
        $edit=Category::findOrFail($id);
        return view('admin.category.edit', compact('edit'));
    }
    public function update($id, Request $request)
    {
        Alert::success('Mantap Sahabat', 'Category Berhasil Diupdate');
        $update = Category::find($id);
        $update->name = $request->name;
        $update->update();
        return redirect('/admin/blog/category');
    }
    public function destroy($id)
    {
        $Category = Category::findOrFail($id);
        $Category->delete();
        return redirect('/admin/blog/category');
    }
}
