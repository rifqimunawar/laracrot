<?php

namespace App\Http\Controllers;

use App\Models\HBN;
use App\Models\Agenda;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class AgendaController extends Controller
{
  public function index()
  {
      $hbns = HBN::latest()->take(5)->get();
      $user=Auth::user();
      $events = Agenda::all();
    // dd($events);
      return view('user.calendar', compact('events', 'user', 'hbns'));
  }

  public function list()
  {
      $events = Agenda::all();
      return view('admin.calender.index', compact('events'));
  }

  public function create()
  {
    return view('admin.calender.create');
  }
  
  public function store(Request $request)
  {
    $events = $request->all();

    if ($request->pamflet) {
        $extension = $request->pamflet->getClientOriginalExtension();
        $newFileName = 'agenda' . '_' . $request->penyelenggara . '-' . now()->timestamp . '.' . $extension;
        $request->file('pamflet')->move(public_path('/storage/img'), $newFileName);
        $events['pamflet'] = $newFileName;
    }
    $events = Agenda::create($events);
    Alert::success('Mantap Sahabat', 'Agenda Berhasil Ditambahkan');
    return redirect('/admin/calendar/');
  }

  public function destroy($id)
  {
      $events = Agenda::findOrFail($id);
      $events->delete();
      Alert::success('Mantap Sahabat', 'Agenda Berhasil Dihapus');
      return redirect('/admin/calendar');
  }
}
