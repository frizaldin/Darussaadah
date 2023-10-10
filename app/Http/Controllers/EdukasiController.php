<?php

namespace App\Http\Controllers;

use App\Models\Edukasi;
use Illuminate\Http\Request;

class EdukasiController extends Controller
{
    function index()
    {
        return view('backend.edukasi.index', [
            'edukasi' => Edukasi::paginate(10)
        ]);
    }

    function add()
    {
        return view('backend.edukasi.add');
    }

    function create(Request $request)
    {
        $tahun = $request->tahun;
        $jurusan = $request->jurusan;
        $lembaga = $request->lembaga;
        $deskripsi = $request->deskripsi;

        $create = Edukasi::create([
            'tahun' => $tahun,
            'jurusan' => $jurusan,
            'lembaga' => $lembaga,
            'deskripsi' => $deskripsi,
        ]);

        return redirect('/edukasi');
    }

    function edit($id)
    {
        $edukasi = Edukasi::find($id);

        return view('backend.edukasi.edit', [
            'edukasi' => $edukasi
        ]);
    }

    function update(Request $request)
    {
        $id = $request->id;
        $tahun = $request->tahun;
        $jurusan = $request->jurusan;
        $lembaga = $request->lembaga;
        $deskripsi = $request->deskripsi;

        $edukasi = Edukasi::find($id);

        $edukasi->update([
            'tahun' => $tahun,
            'jurusan' => $jurusan,
            'lembaga' => $lembaga,
            'deskripsi' => $deskripsi,
        ]);

        return redirect('edukasi');
    }

    function delete($id)
    {
        $edukasi = Edukasi::find($id);
        $edukasi->delete();

        return redirect()->back();
    }
}
