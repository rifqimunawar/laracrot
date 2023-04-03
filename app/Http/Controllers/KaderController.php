<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Kader;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class KaderController extends Controller
{
    public function kader(Request $request)
    {
        if ($request->has('search')) {
            $kader = Kader::Where('nama','LIKE','%'.$request->search.'%')
                        ->orwhere('jenis_kelamin', 'LIKE', '%' . $request->search . '%')
                        ->orwhere('fakultas', 'LIKE', '%' . $request->search . '%')
                        ->get();
        } else {
            $kader = Kader::latest()->get();
        }
        return view('admin.kader.index', compact(['kader']));
    }
    public function statistik(Request $request)
    {
        $statistik = Kader::all();
        // $statistik = Kader::where('jenis_kelamin', 'L')::count();
        // $statistik = Kader::where('jenis_kelamin', 'p')::count();
        return view('admin.index', compact(['statistik']));
    }

    // fungsi memanggil forom tambah data 
    public function create()
    {
        return view('admin.kader.create');
    }
    // fungsi simpan data
    public function store(Request $request)
    {


        $validator = Validator::make($request->all(), [
            'nama' => 'required',
            'alamat' => 'required',
            'nim' => 'required',
            'jenis_kelamin' => 'required',
            't_lahir' => 'required',
            'ttl' => 'required',
            'wa' => 'required',
            'sma' => 'required',
            'thn_lulus' => 'required',
            'pesantren' => 'required',
            'thn_kuliah' => 'required',
            'fakultas' => 'required',
            'jurusan' => 'required',
            'thn_mapaba' => 'required',
            'penyelenggara_mapaba' => 'required',
            'thn_pkd' => 'required',
            'thn_pkl' => 'required',
            'thn_pkn' => 'required',
            'informal' => 'required',
            'penyelenggara_informal' => 'required',
            'nonformal' => 'required',
            'penyelenggara_nonformal' => 'required',
            'photo' => 'required', 'simtimes|image:gif,png,jpg,jpeg',
        ]);

        // ddd($validator);

        // if ($validator->passes()) {
        //sava data here

        $kader = new Kader();

        $kader->nama = $request->nama;
        $kader->alamat = $request->alamat;
        $kader->nim = $request->nim;
        $kader->jenis_kelamin = $request->jenis_kelamin;
        $kader->t_lahir = $request->t_lahir;
        $kader->ttl = $request->ttl;
        $kader->wa = $request->wa;
        $kader->sma = $request->sma;
        $kader->thn_lulus = $request->thn_lulus;
        $kader->pesantren = $request->pesantren;
        $kader->thn_kuliah = $request->thn_kuliah;
        $kader->fakultas = $request->fakultas;
        $kader->jurusan = $request->jurusan;
        $kader->thn_mapaba = $request->thn_mapaba;
        $kader->penyelenggara_mapaba = $request->penyelenggara_mapaba;
        $kader->thn_pkd = $request->thn_pkd;
        $kader->thn_pkl = $request->thn_pkl;
        $kader->thn_pkn = $request->thn_pkn;
        $kader->informal = $request->informal;
        $kader->penyelenggara_informal = $request->penyelenggara_informal;
        $kader->nonformal = $request->nonformal;
        $kader->penyelenggara_nonformal = $request->penyelenggara_nonformal;

        $kader->save();

        if ($request->photo) {
            $extension = $request->photo->getClientOriginalExtension();
            $newFileName = 'profile' . '_' . $request->nama . '-' . now()->timestamp . '.' . $extension;
            // $request->photo->move(public_path() . '/uploads/' . $newFileName);
            $request->file('photo')->storeAs('/uploads', $newFileName);
            $kader['photo'] = $newFileName;
            $kader->save();
        }

        // ddd($request);
        return redirect('/admin/kader/');
    }

    public function edit($id)
    {
        $kader = Kader::find($id);
        return view('admin.kader.edit', compact(['kader']));
    }
    public function update($id, Request $request)
    {
        $kader = Kader::find($id);


        $validator = Validator::make($request->all(), [
            'nama' => 'required',
            'photo' => 'required', 'simtimes|image:gif,png,jpg,jpeg'
        ]);
        $kader =  Kader::find($id);
        $kader->nama = $request->nama;
        $kader->alamat = $request->alamat;
        $kader->nim = $request->nim;
        $kader->jenis_kelamin = $request->jenis_kelamin;
        $kader->t_lahir = $request->t_lahir;
        $kader->ttl = $request->ttl;
        $kader->wa = $request->wa;
        $kader->sma = $request->sma;
        $kader->thn_lulus = $request->thn_lulus;
        $kader->pesantren = $request->pesantren;
        $kader->thn_kuliah = $request->thn_kuliah;
        $kader->fakultas = $request->fakultas;
        $kader->jurusan = $request->jurusan;
        $kader->thn_mapaba = $request->thn_mapaba;
        $kader->penyelenggara_mapaba = $request->penyelenggara_mapaba;
        $kader->thn_pkd = $request->thn_pkd;
        $kader->thn_pkl = $request->thn_pkl;
        $kader->thn_pkn = $request->thn_pkn;
        $kader->informal = $request->informal;
        $kader->penyelenggara_informal = $request->penyelenggara_informal;
        $kader->nonformal = $request->nonformal;
        $kader->penyelenggara_nonformal = $request->penyelenggara_nonformal;

        $kader->update();
        if ($request->photo) {
            $extension = $request->photo->getClientOriginalExtension();
            $newFileName = 'profile' . '_' . $request->nama . '-' . now()->timestamp . '.' . $extension;
            // $request->photo->move(public_path() . '/uploads/' . $newFileName);
            $request->file('photo')->storeAs('/uploads', $newFileName);
            $kader['photo'] = $newFileName;
            $kader->update();
        }
        return redirect('/admin/kader/');
    }

    public function destroy($id)
    {
        $kader = Kader::findOrFail($id);
        $kader->delete();
        return redirect('/admin/kader/');
    }
    public function view($id)
    {
        $kader = Kader::find($id);
        $user = User::find($id);
        return view('admin.kader.view', compact(['kader', 'user']));
    }
}
