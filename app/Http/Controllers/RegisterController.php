<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterStoreRequest;
use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    function index() {
        return view('register.index');
    }

    function store(RegisterStoreRequest $request) {

        User::create([
            'username' => $request->username,
            'name' => $request->name,
            'alamat' => $request->alamat,
            'no_hp' => $request->no_hp,
            'email' => $request->email,
            'password' => $request->password
        ]);

        return redirect('/')->with('success', 'Daftar Berhasil');

    }

}
