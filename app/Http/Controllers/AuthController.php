<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    function login()
    {
        return view('backend.login');
    }

    function process_login(Request $request)
    {
        //Mengambil inputan email dan password
        $key = $request->only('email', 'password');

        //Kondisikan Jika Email dan Password ada di database
        if (Auth::attempt($key)) {
            //Jika Password dan email benar maka arahkan
            return redirect('backend');
        } else {
            //Jika Password dan email salah maka arahkan
            return redirect()->back()->with(['message' => 'Email atau Password Anda Salah']);
        }
    }

    function logout()
    {
        Auth::logout();
        return redirect('/login');
    }
}
