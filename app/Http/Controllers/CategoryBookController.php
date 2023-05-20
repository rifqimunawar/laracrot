<?php

namespace App\Http\Controllers;

use App\Models\CategoryBook;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Request;
use RealRashid\SweetAlert\Facades\Alert;
use App\Http\Requests\StoreCategoryBookRequest;
use App\Http\Requests\UpdateCategoryBookRequest;

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
    $categorybook = $request -> all();
    $request->file('img')->getClientOriginalExtension();
    if ($request->img) {
      $extension = $request->img->getClientOriginalExtension();
      $newFileName = 'categorybook' . '_' . $request->name . '-' . now()->timestamp . '.' . $extension;
      $request->file('img')->move(public_path('/storage/img'), $newFileName);
      $categorybook['img'] = $newFileName;
  }
    $categorybook = CategoryBook::create($categorybook);
    Alert::success('Mantap Sahabat', 'Category Buku Berhasil Ditambahkan');
    return redirect('/admin/categorybook');
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
    if ($request->img) {
      $extension = $request->img->getClientOriginalExtension();
      $newFileName = 'categorybook_update' . '_' . $request->name . '-' . now()->timestamp . '.' . $extension;
      $request->file('img')->move(public_path('/storage/img'), $newFileName);
      $categorybookData['img'] = $newFileName;
    }
  
    $categorybookToUpdate->update($categorybookData);
  
    Alert::success('Mantap Sahabat', 'Category Buku Berhasil Di Ubah');
    return redirect('/admin/categorybook');
  }
  public function destroy($id)
  {
      $categorybook = CategoryBook::findOrFail($id);
      if ($categorybook->perpus()->count()) {
        return redirect('/admin/categorybook/')->with('error', 'Error! The category has entries.');
      }
      $categorybook->delete();
      Alert::success('Mantap Sahabat', 'Category Buku Berhasil Dihapus');
      return redirect('/admin/categorybook/');
  }
}
