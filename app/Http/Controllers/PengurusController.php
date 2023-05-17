<?php

namespace App\Http\Controllers;

use App\Models\Pengurus;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class PengurusController extends Controller
{
    public function show(Request $request)
    {
      $user=Auth::user();
      $penguruses=Pengurus::all();
    return view('user.pengurus', compact('user', 'penguruses'));
    }

    public function index(Request $request)
    {
      $penguruses = Pengurus::latest()->get();
      return view('admin.pengurus.index', compact('penguruses'));
    }

    public function create()
    {
      return view('admin.pengurus.create');
    }

    public function store(Request $request)
    {
      $penguruses = $request -> all();
      $request->file('img')->getClientOriginalExtension();
      if ($request->img) {
        $extension = $request->img->getClientOriginalExtension();
        $newFileName = 'pengurus' . '_' . $request->name . '-' . now()->timestamp . '.' . $extension;
        $request->file('img')->move(public_path('/storage/img'), $newFileName);
        $penguruses['img'] = $newFileName;
    }
      $penguruses = Pengurus::create($penguruses);
      Alert::success('Mantap Sahabat', 'Pengurus Berhasil Ditambahkan');
      return redirect('/admin/pengurus');
    }
    public function edit($id, Request $request)
    {
      $penguruses = Pengurus ::find($id);
      return view('admin.pengurus.edit', compact('penguruses'));
    }
    public function update($id, Request $request)
    {
      $pengurusToUpdate = Pengurus::findOrFail($id);
    
      $pengurusData = $request->all();
      if ($request->img) {
        $extension = $request->img->getClientOriginalExtension();
        $newFileName = 'pengurus_update' . '_' . $request->name . '-' . now()->timestamp . '.' . $extension;
        $request->file('img')->move(public_path('/storage/img'), $newFileName);
        $pengurusData['img'] = $newFileName;
      }
    
      $pengurusToUpdate->update($pengurusData);
    
      Alert::success('Mantap Sahabat', 'pengurus Berhasil Di Ubah');
      return redirect('/admin/pengurus');
    }
    public function destroy($id)
    {
        $pengurus = Pengurus::findOrFail($id);
        $pengurus->delete();
        Alert::success('Mantap Sahabat', 'Pengurus Berhasil Dihapus');
        return redirect('/admin/pengurus/');
    }
}
