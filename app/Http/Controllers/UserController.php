<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    function index()
    {
        $user = User::get();

        //Cara 1
        // return view('index', compact('user'));

        //Cara 2
        return view('backend.user.index', [
            'orang' => $user
        ]);
    }

    function add()
    {
        return view('backend.user.add');
    }

    function create(Request $request)
    {
        //Validasi untuk email yang tidak boleh sama

        //required = email harus diisi
        //unique = email tidak boleh sama dengan table user
        $request->validate([
            'email' => 'required|unique:users',
        ], [
            //validasi text custom
            'email' => 'Email anda telah digunakan'
        ]);

        //get data dari inputan
        $name = $request->name;
        $email = $request->email;
        $password = $request->password;

        // User::create($request->all());

        //Create data / tambah data baru
        User::create([
            'name' => $name,
            'email' => $email,
            'password' => $password,
        ]);

        //kembalikan ke halaman awal
        return redirect('/');
    }

    function edit($id)
    {
        //get data berdasarkan id
        $user = User::find($id);

        return view('backend.user.edit', [
            'user' => $user
        ]);
    }

    function update(Request $request)
    {
        //get data dari inputan
        $id = $request->id;
        $name = $request->name;
        $email = $request->email;
        $password = $request->password;

        //temukan data user berdasarkan id
        $user = User::find($id);

        // update user yang ditemukan
        $user->update([
            'name' => $name,
            'email' => $email,
            'password' => $password,
        ]);


        // return redirect()->back();
        return redirect('/');
    }

    function delete($id)
    {
        $user = User::find($id);

        $user->delete();

        //Redirect Back
        // return redirect()->back();

        //Redirect URL
        // return redirect('galleries');

        // Redirect Route
        return redirect()->route('gallery.index');
    }
}
