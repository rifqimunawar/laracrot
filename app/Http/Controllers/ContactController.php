<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class ContactController extends Controller
{
  public function create()
  {
    $user = Auth::user();
    return view('user.contact', compact('user'));
  }
    public function store(Request $request)
    {
      $contact = $request -> all();
      $contact = Contact::create($contact);

      Alert::success('Terima Kasih', 'Masukan anda sangat berharga bagi kami, chuaaaks');
      return redirect('/contact');
    }
}
