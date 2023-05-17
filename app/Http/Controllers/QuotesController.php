<?php

namespace App\Http\Controllers;

use App\Models\Quotes;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use RealRashid\SweetAlert\Facades\Alert;

class QuotesController extends Controller
{
    public function index(Request $request)
    {
      $quotes = Quotes::latest()->get();
      return view('admin.quotes.index', compact('quotes'));
    }

    public function create()
    {
    return view('admin.quotes.create');
    }

    public function store(Request $request)
    {
      $quotes = $request -> all();
      $request->file('img')->getClientOriginalExtension();
      if ($request->img) {
        $extension = $request->img->getClientOriginalExtension();
        $newFileName = 'quotes' . '_' . $request->name . '-' . now()->timestamp . '.' . $extension;
        $request->file('img')->move(public_path('/storage/img'), $newFileName);
        $quotes['img'] = $newFileName;
    }
      $quotes = Quotes::create($quotes);
      Alert::success('Mantap Sahabat', 'Quote Berhasil Ditambahkan');
      return redirect('/admin/quotes');
    }
    public function edit($id, Request $request)
    {
      $quotes = Quotes ::find($id);
      return view('admin.quotes.edit', compact('quotes'));
    }
    public function update($id, Request $request)
    {
      $quoteToUpdate = Quotes::findOrFail($id);
    
      $quoteData = $request->all();
      if ($request->img) {
        $extension = $request->img->getClientOriginalExtension();
        $newFileName = 'quotes_update' . '_' . $request->name . '-' . now()->timestamp . '.' . $extension;
        $request->file('img')->move(public_path('/storage/img'), $newFileName);
        $quoteData['img'] = $newFileName;
      }
    
      $quoteToUpdate->update($quoteData);
    
      Alert::success('Mantap Sahabat', 'Quote Berhasil Di Ubah');
      return redirect('/admin/quotes');
    }
    public function destroy($id)
    {
        $quotes = Quotes::findOrFail($id);
        $quotes->delete();
        Alert::success('Mantap Sahabat', 'Quote Berhasil Dihapus');
        return redirect('/admin/quotes/');
    }
}
