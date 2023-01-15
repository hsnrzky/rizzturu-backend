<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redis;


class LoginController extends Controller
{
    protected function authenticated(Request $request, $user)
    {
    if ($request->has('remember')) {
        $remember_token = Str::random(60);
        $user->forceFill([
            'remember_token' => Hash::make($remember_token),
        ])->save();
        $request->session()->put('remember', $remember_token);
        }
    }

    public function index()
    {
        return view('login.index', [
            'title' => 'Login',
            'active' => 'login',
        ]);
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if(Auth::attempt($credentials)) {
            //melakukan session()->regenerate() untuk menghidari teknik hacking yang bernama session fixation->(seseorang memasuki celah keamanan sistem dengan menggunakan session yang sama tanpa perlu login)
            $request->session()->regenerate();
            return redirect()->intended('/dashboard');
        }

        return back()->with('loginError', 'Login failed!');
    }

    // public function logout(Request $request)
    // {
    //     $request->session()->forget('remember');
    //     $this->guard()->logout();
    //     $request->session()->invalidate();
    //     return $this->loggedOut($request) ?: redirect('/');
    // }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');

    }
}
