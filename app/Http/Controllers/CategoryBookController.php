<?php

namespace App\Http\Controllers;

use App\Models\CategoryBook;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use RealRashid\SweetAlert\Facades\Alert;

class CategoryBookController extends Controller
{
  public function index(Request $request)
  {
    $categorybook = CategoryBook::with('perpus')->get();
    return view('admin.categorybook.index', compact('categorybook'));
  }

  public function create()
  {
  return view('admin.categorybook.create');
  }
  public function store(Request $request)
  {
      $categoryData = $request->only('title', 'slug');
      $category = CategoryBook::create($categoryData);
  
      Alert::success('Mantap Sahabat', 'Category Buku Berhasil Ditambahkan');
      return redirect('/admin/categorybooks');
  }
  
  public function show($id, Request $request)
  {
      $categorybook = CategoryBook::with('perpus')->paginate(10)->find($id);
      return view('admin.categorybook.show', compact('categorybook'));
  }
  
  
  public function edit($id, Request $request)
  {
    $categorybook = CategoryBook ::find($id);
    return view('admin.categorybook.edit', compact('categorybook'));
  }
  public function update($id, Request $request)
  {
    $categorybookToUpdate = CategoryBook::findOrFail($id);
  
    $categorybookData = $request->all();  
    $categorybookToUpdate->update($categorybookData);
  
    Alert::success('Mantap Sahabat', 'Category Buku Berhasil Di Ubah');
    return redirect('/admin/categorybooks/');
  }
  public function destroy($id)
  {
      $categorybook = CategoryBook::findOrFail($id);
      if ($categorybook->perpus()->count()) {
          Alert::error('Error Sahabat', 'Category Buku Sedang Terisi / Tidak Kosong');
          return redirect('/admin/categorybooks')->with('error', 'Error! The category has entries.');
      }
      $categorybook->delete();
      Alert::success('Mantap Sahabat', 'Category Buku Berhasil Dihapus');
      return redirect('/admin/categorybooks');
  }
}
