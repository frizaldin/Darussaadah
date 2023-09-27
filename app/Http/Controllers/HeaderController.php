<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Header;

class HeaderController extends Controller
{
    function index()
    {
        $header = Header::first();
        return view('backend.header.index', [
            'header' => $header
        ]);
    }

    function update(Request $request)
    {
        $id = $request->id;
        $title = $request->title;
        $subtitle = $request->subtitle;
        $name = $request->name;

        $header = Header::find($id);

        if ($request->file) {
            $filename = $request->file->getClientOriginalName();

            $request->file->move('Header', $filename);
        } else {
            $filename = $header->photo;
        }

        $header->update([
            'title' => $title,
            'subtitle' => $subtitle,
            'photo' => $filename,
            'name' => $name,
        ]);

        return redirect()->back();
    }
}
