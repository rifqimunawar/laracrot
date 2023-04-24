<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Tests\Foundation\FoundationFormRequestTest;

/**
 * Summary of LoginController
 */
class LoginController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }
    public function authenticate(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            // Authentication passed...
            Alert::success('Mantap Sahabat', 'Anda Berhasil Masuk');
            return redirect()->intended('/profile');
        }
        return view('auth.login'); 
    }

    public function register()
    {
        return view('auth.register');
    }

    public function store(Request $request)
    {
        $request->validate([
          'username' => 'required|unique|max:255',
          'email' => 'required|email|max:255',
          'rayon_id' => 'required',
          'password' => 'required',
      ]);

      $user = User::create([
          'username'=>$request->username,
          'email'=>$request->email,
          'rayon_id'=>$request->rayon_id,
          'password'=>bcrypt( $request->password),
      ]);


        // Set flash message
        session()->flash('success', 'Pesan berhasil dikirim!');
        // ddd($user);
        Alert::success('Mantap Sahabat', 'Anda Berhasil Register');
        return redirect()->to('/login');
    }

    /**
     * Summary of logout
     * @param Request $request
     * @return RedirectResponse
     */
    public function logout(Request $request): RedirectResponse
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect ('/');
    }
}
