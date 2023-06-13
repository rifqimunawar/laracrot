<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;
use Illuminate\Auth\Events\PasswordReset;
use Illuminate\Foundation\Auth\ResetsPasswords;

class ForgetPasswordControler extends Controller
{
    
    // fitru reset passsword
    use ResetsPasswords;

    // Menampilkan form lupa kata sandi
    public function showForgotPasswordForm()
    {
        return view('auth.forgot-password');
    }

    // Mengirim tautan reset kata sandi
    public function sendResetLinkEmail(Request $request)
    {
        $request->validate(['email' => 'required|email']);

        $status = $this->broker()->sendResetLink($request->only('email'));

        return $status === Password::RESET_LINK_SENT
            ? back()->with(['status' => __($status)])->withInput()
            : back()->withErrors(['email' => __($status)])->withInput();
    }

    // Menampilkan form reset kata sandi
    public function showResetPasswordForm($token)
    {
        return view('auth.reset-password', ['token' => $token]);
    }

    // Melakukan reset kata sandi
    public function resetPassword(Request $request)
    {

      // dd($request);
        $request->validate([
            'token' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:8|regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d).+$/',
        ]);

        $status = Password::reset(
            $request->only('email', 'password', 'password_confirmation', 'token'),
            function (User $user, string $password) {
                $user->forceFill([
                    'password' => Hash::make($password)
                ])->setRememberToken(Str::random(60));
      
                $user->save();
      
                event(new PasswordReset($user));
            }
        );

        return $status === Password::PASSWORD_RESET
            ? redirect()->route('login')->with('success', 'Mantap Sahabat! Anda Bisa Menggunakan Password Baru.')
            : back()->withErrors(['email' => __($status)]);
    }
    
}
