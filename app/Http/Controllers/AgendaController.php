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
      $hbns = HBN::latest()->take(20)->get();
      $user=Auth::user();
      $events = Agenda::latest()->get();
    // ddd($events);
      return view('user.calendar', compact('events', 'user', 'hbns'));
  }

  public function list()
  {
      $events = Agenda::all();
      // ddd($events);
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

  public function edit($id, Request $request)
  {
    $event = Agenda ::find($id);
    return view('admin.calender.edit', compact('event'));
  }
  public function update($id, Request $request)
  {
      $eventToUpdate = Agenda::findOrFail($id);
      $event = $request->all();
    
      // Periksa apakah checkbox dicentang atau tidak
      $status = isset($event['status']) ? true : false;
      $event['status'] = $status;
    
      $eventToUpdate->update($event);
    
      Alert::success('Mantap Sahabat', 'Agenda Berhasil Di Ubah');
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
