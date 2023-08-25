<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Auth\Events\PasswordReset;
use Illuminate\Foundation\Auth\ResetsPasswords;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use RealRashid\SweetAlert\Facades\Alert;

/**
 * Summary of LoginController
 */
class LoginController extends Controller
{
    public function login()
    {
        if (auth()->check()) {
            return redirect('/profile');
        }
    
        return view('auth.login');
    }
    public function authenticate(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            // Authentication passed...
            Alert::success('Mantap Sahabat', 'Anda Berhasil Masuk');
            return redirect()->intended('/profile');
        } else {
            // Authentication failed...
            $user = User::where('email', $credentials['email'])->first();

            if (!$user) {
                return redirect()->back()->with('error', 'Email atau Password Salah');
            } else {
                return redirect()->back()->with('error', 'Email atau Password Salah');
            }
        }
    }

    public function validasi()  {
      return view('auth.verifikasi-register');
    }



    public function validasii(Request $request)
    {
      $nim = $request->input('nim');
      $user = User::where('nim', $nim)->first();
    
      if ($user) {
        if ($user->email) {
          Alert::info('NIM Sudah Terdaftar', 
          'Anda Sudah Memiliki Akun, Tinggal Login Saja');
          return redirect()->route('login');
        } else {
          // dd($user); sampai sini sudah benar
          return redirect()->route('register', ['user' => $user]);
        }
      } else {
        Alert::error('Maaf Sahabat', 'NIM Anda belum terdaftar. 
        Mohon minta admin Rayon untuk melakukan 
        sensus terlebih dahulu, lalu registrasi kembali.');
        return redirect()->route('login');
      }
    }
    
    public function register($user, Request $request) {
      $usertoRegis = User::find($user);
      // dd($user);
      // dd($usertoRegis);
      return view('auth.register', compact('usertoRegis'));
    }
    
    public function store($id, Request $request)
{
    // Rule validasi untuk username dan password
    $rules = [
        'username' => 'required|unique:users,username',
        'email' => 'required|unique:users,email',
        'password' => 'required|min:8|regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d).+$/',
    ];

    $messages = [
      'username.required' => 'Username wajib diisi.',
      'username.unique' => 'Username sudah digunakan.',
      'email.required' => 'Email wajib diisi.',
      'email.unique' => 'Email sudah digunakan.',
      'nim.required' => 'NIM wajib diisi.',
      'nim.unique' => 'NIM sudah digunakan.',
      'nim.min' => 'NIM harus memiliki minimal 14 angka.',
      'password.required' => 'Password wajib diisi.',
      'password.min' => 'Password minimal 8 karakter.',
      'password.regex' => 'Password harus terdiri dari huruf kapital, huruf kecil, dan angka.',
  ];

    // Validasi input
    $validator = Validator::make($request->all(), $rules, $messages);

    if ($validator->fails()) {
        return redirect()->back()->withErrors($validator)->withInput();
    }

    // Update user yang sudah ada
    $user = User::find($id);
    $user->username = $request->username;
    $user->email = $request->email;
    $user->password = bcrypt($request->password);
    $user->save();

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
