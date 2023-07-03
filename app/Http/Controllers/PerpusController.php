<?php

namespace App\Http\Controllers;
use App\Models\Perpus;
use App\Models\CategoryBook;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Http\RedirectResponse;
use RealRashid\SweetAlert\Facades\Alert;

class PerpusController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
      if ($request->has('search')) {
      $perpus = Perpus::with ('categorybooks')
        ->where('judul', 'LIKE', '%' . $request->search . '%')
        ->orwhere('penulis', 'LIKE', '%' . $request->search . '%')
        // ->orwhere('categorybooks', 'LIKE', '%' . $request->search . '%') //title di ambil dari categorybook
        ->get();
        } else {
          $perpus = Perpus::with('categorybooks')->latest()->paginate(25);
        }

        $user = Auth::user();
        return view('/user/perpus', compact('user', 'perpus'));
    }
    public function details($id, Request $request)
    {
        $user = Auth::user();
        $perpus = Perpus::find($id);

        return view('/user/details', compact('user', 'perpus'));
    }

    public function admin_index(Request $request)
    {
        $perpus = Perpus::with('categorybooks')->paginate(10);
        return view('admin/perpus/index', compact('perpus'));
    }
    

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        $category = CategoryBook::all();
        return view('admin.perpus.create', compact('category'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
      
      $perpus = $request->all();
      $perpus['user_id'] = Auth::user()->id;

        if ($request->image) {
            $extension = $request->image->getClientOriginalExtension();
            $newFileName = $request->judul . '_' . 'PMII_UNINUS' . '-' . now()->timestamp . '.' . $extension;
            $request->file('image')->move(public_path('/storage/img'), $newFileName);
            $perpus['image'] = $newFileName;
        }

        if ($request->pdf) {
            $extension = $request->pdf->getClientOriginalExtension();
            $newFileName = $request->judul . '-' . 'PMII_UNINUS' . now()->timestamp . '.' . $extension;
            $request->file('pdf')->move(public_path('/storage/pdf'), $newFileName);
            $perpus['pdf'] = $newFileName;
        }
        $perpus = Perpus::create($perpus);

        Alert::success('Mantap Sahabat', 'File Berhasil Ditambahkan');
        return redirect('/admin/perpus');
    }


    public function edit($id, Request $request)
    {
      $perpus = Perpus ::find($id);
      $category = CategoryBook::all();
      return view('admin.perpus.edit', compact('perpus', 'category'));
    }
    public function update($id, Request $request)
    {
      $perpusToUpdate = Perpus::findOrFail($id);
    
      $perpusData = $request->all();
      if ($request->img) {
        $extension = $request->img->getClientOriginalExtension();
        $newFileName = 'quotes_update' . '_' . $request->judul . '-' . now()->timestamp . '.' . $extension;
        $request->file('img')->move(public_path('/storage/img'), $newFileName);
        $perpusData['img'] = $newFileName;
      }
    
      $perpusToUpdate->update($perpusData);
    
      Alert::success('Mantap Sahabat', 'Buku Berhasil Di Ubah');
      return redirect('/admin/perpus');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id): RedirectResponse
    {
        $perpus = Perpus::findOrFail($id);

        if ($perpus->image) {
            $image_path = public_path() . $perpus->image;
            if (File::exists($image_path)) {
                File::delete($image_path);
            }
        }

        if ($perpus->pdf) {
            $pdf_path = public_path() . $perpus->pdf;
            if (File::exists($pdf_path)) {
                File::delete($pdf_path);
            }
        }

        $perpus->delete();

        return redirect('admin/perpus')->with('success', 'Buku deleted successfully!');
    }
}
