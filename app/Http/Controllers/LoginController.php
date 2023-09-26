<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class LoginController extends Controller
{
    function index() {
        return view('login.index');
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'username' => 'required',
            'password' => ['required', 'min:3'],
        ],[
            'username.required' => 'username tidak boleh kosong',
            'password.required' => 'password tidak boleh kosong'
        ]);
 
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
 
            return redirect()->intended('/')->with('success', 'Login Berhasil');
        }

        return redirect()->back()->with('error', 'username atau password tidak sesuai');
    }

    public function logout(Request $request)
    {
        Auth::logout();
    
        $request->session()->invalidate();
    
        $request->session()->regenerateToken();
    
        return redirect('/login')->with('success', 'Logout Berhasil');
    }
}
