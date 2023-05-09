<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Validator;
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
        $credentials = $request->only('username', 'password');

        if (Auth::attempt($credentials)) {
            // Authentication passed...
            Alert::success('Mantap Sahabat', 'Anda Berhasil Masuk');
            return redirect()->intended('/profile');
        } else {
            // Authentication failed...
            $user = User::where('username', $credentials['username'])->first();

            if (!$user) {
                return redirect()->back()->with('error', 'Username atau Password Salah');
            } else {
                return redirect()->back()->with('error', 'Username atau Password Salah');
            }
        }
    }


    public function register()
    {
        return view('auth.register');
    }
    public function store(Request $request)
    {
        // Rule validasi untuk username dan password
        $rules = [
            'username' => 'required|unique:users,username',
            'nim' => 'required|unique:users,nim',
            'password' => 'required|min:8|regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d).+$/',
        ];
    
        // Pesan validasi
        $messages = [
            'username.required' => 'Username wajib diisi.',
            'username.unique' => 'Username sudah digunakan.',
            'nim.required' => 'Nim wajib diisi.',
            'nim.unique' => 'Nim sudah digunakan.',
            'password.required' => 'Password wajib diisi.',
            'password.min' => 'Password minimal 8 karakter.',
            'password.regex' => 'Password harus terdiri dari huruf kapital, huruf kecil, dan angka.',
        ];
    
        // Validasi input
        $validator = Validator::make($request->all(), $rules, $messages);
    
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
    
        // Buat user baru
        $user = User::create([
            'name'=>$request->name,
            'nim'=>$request->nim,
            'username'=>$request->username,
            'email'=>$request->email,
            'rayon_id'=>$request->rayon_id,
            'role_id'=>$request->role_id,
            'password'=>bcrypt($request->password),
        ]);
    
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
