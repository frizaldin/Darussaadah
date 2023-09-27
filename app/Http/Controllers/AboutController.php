<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    function index()
    {
        //First itu adalah mengambil data pertama
        $about = About::first();
        return view('backend.about.index', [
            'about' => $about
        ]);
    }

    function update(Request $request)
    {

        $request->validate([
            'judul' => 'required',
            'subjudul' => 'required',
            'deskripsi' => 'required',
            'umur' => 'required',
            'wilayah' => 'required',
            'alamat' => 'required',
            'email' => 'required',
            'phone' => 'required|max:16',
            'pekerjaan' => 'required',
        ], [
            //validasi text custom
            'judul' => 'Judul Kosong',
            'subjudul' => 'Sub Judul Kosong',
            'deskripsi' => 'Deskripsi Kosong',
            'umur' => 'Umur Kosong',
            'wilayah' => 'Wilayah Kosong',
            'alamat' => 'Alamat Kosong',
            'email' => 'Email Kosong',
            'phone' => 'No Telepon Kosong',
            'pekerjaan' => 'Pekerjaan Kosong'
        ]);

        $id = $request->id;
        $judul = $request->judul;
        $subjudul = $request->subjudul;
        $deskripsi = $request->deskripsi;

        $umur = $request->umur;
        $wilayah = $request->wilayah;
        $alamat = $request->alamat;
        $email = $request->email;
        $phone = $request->phone;
        $pekerjaan = $request->pekerjaan;


        $about = About::find($id);

        if ($request->file) {
            $filename = $request->file->getClientOriginalName();

            $request->file->move('About', $filename);
        } else {
            $filename = $about->file;
        }

        $about->update([
            'judul' => $judul,
            'subjudul' => $subjudul,
            'file' => $filename,
            'deskripsi' => $deskripsi,
            'umur' => $umur,
            'wilayah' => $wilayah,
            'alamat' => $alamat,
            'email' => $email,
            'phone' => $phone,
            'pekerjaan' => $pekerjaan,
        ]);

        return redirect()->back();
    }
}
