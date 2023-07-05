<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;

class MobileHomeController extends Controller
{
  
  public function home() {
    $tgl = Carbon::now();
    return view('mobile.home.index', compact('tgl'));
  }

}
