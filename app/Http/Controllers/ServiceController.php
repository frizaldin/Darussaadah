<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    function index()
    {
        return view('backend.service.index', [
            'service' => Service::get()
        ]);
    }

    function add()
    {
        return view('backend.service.add');
    }

    function create(Request $request)
    {
        $title = $request->title;
        $subtitle = $request->subtitle;

        if ($request->file) {
            //Memanggil nama asli dari file yang di input
            $filename = $request->file->getClientOriginalName();

            //pindahkan file ke folder service/layanan
            $request->file->move('Service', $filename);
        }

        $create = Service::create([
            'title' => $title,
            'subtitle' => $subtitle,
            'file' => $request->file ? $filename : ''
        ]);

        return redirect('/services');
    }

    function edit($id)
    {
        $service = Service::find($id);

        return view('backend.service.edit', [
            'service' => $service
        ]);
    }

    function update(Request $request)
    {
        $id = $request->id;
        $title = $request->title;
        $subtitle = $request->subtitle;

        $service = Service::find($id);

        if ($request->file) {
            $filename = $request->file->getClientOriginalName();

            $request->file->move('Service', $filename);
        } else {
            $filename = $service->file;
        }

        $service->update([
            'title' => $title,
            'subtitle' => $subtitle,
            'file' => $filename,
        ]);

        return redirect('services');
    }

    function delete($id)
    {
        $service = Service::find($id);
        $service->delete();

        if (file_exists('Service/' . $service->file)) {
            unlink('Service/' . $service->file);
        }

        return redirect()->back();
    }
}
