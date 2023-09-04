<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class QrCodeController extends Controller
{
 public function index($id, Request $request)
 {
   $users = User::findOrFail($id);

   return view('user.qrcode', compact('users'));
 }
}
