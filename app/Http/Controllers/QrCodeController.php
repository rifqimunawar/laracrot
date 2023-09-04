<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class QrCodeController extends Controller
{
 public function index($id, Request $request)
 {
   $users = User::findOrFail($id);
   $now = Carbon::now()->format('Y-m-d');

   return view('user.qrcode', compact('users', 'now'));
 }
}
