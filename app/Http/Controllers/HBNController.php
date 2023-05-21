<?php

namespace App\Http\Controllers;

use App\Models\HBN;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use RealRashid\SweetAlert\Facades\Alert;

class HBNController extends Controller
{
    public function index(Request $request)
    {
    $hbns = HBN::latest()->paginate(20);
    return view ('admin.hbn.index', compact('hbns'));
    }
    public function create()
    {
    return view('admin.hbn.create');
    }
    public function store(Request $request)
    {
      $hbns = $request -> all();
      $hbns = HBN::create($hbns);

      Alert::success('Mantap Sahabat', 'Hari Besar Berhasil Ditambahkan');
      return redirect()->route('hbn.index');
    }
    public function destroy($id)
    {
        $quotes = HBN::findOrFail($id);
        $quotes->delete();
        Alert::success('Mantap Sahabat', 'Hari Besar Berhasil Dihapus');
        return redirect()->route('hbn.index');
    }
}
