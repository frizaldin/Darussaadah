<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    function index(Request $request)
    {
        return view('backend.gallery.index', [
            //Pagination : memfilter data per page dengan 10 data/page
            'gallery' => Gallery::where([
                [function ($query) use ($request) {
                    if ($request->keyword) {
                        $query->where('judul', 'LIKE', '%' . $request->keyword . '%');
                    }
                }]
            ])->paginate(10)
        ]);
    }

    function add()
    {
        return view('backend.gallery.add');
    }

    function create(Request $request)
    {
        $judul = $request->judul;
        $subjudul = $request->subjudul;

        if ($request->file) {
            //Memanggil nama asli dari file yang di input
            $filename = $request->file->getClientOriginalName();

            //pindahkan file ke folder gallery
            $request->file->move('Gallery', $filename);
        }

        $create = Gallery::create([
            'judul' => $judul,
            'subjudul' => $subjudul,
            'file' => $request->file ? $filename : ''
        ]);

        return redirect('/galleries');
    }

    function edit($id)
    {
        $gallery = Gallery::find($id);

        return view('backend.gallery.edit', [
            'gallery' => $gallery
        ]);
    }

    function update(Request $request)
    {
        $id = $request->id;
        $judul = $request->judul;
        $subjudul = $request->subjudul;

        $gallery = Gallery::find($id);

        if ($request->file) {
            $filename = $request->file->getClientOriginalName();

            $request->file->move('Gallery', $filename);
        } else {
            $filename = $gallery->file;
        }

        $gallery->update([
            'judul' => $judul,
            'subjudul' => $subjudul,
            'file' => $filename,
        ]);

        return redirect('galleries');
    }

    function delete($id)
    {
        $gallery = Gallery::find($id);
        $gallery->delete();

        if (file_exists('Gallery/' . $gallery->file)) {
            unlink('Gallery/' . $gallery->file);
        }

        return redirect()->back();
    }
}
