<?php

namespace App\Http\Controllers;

use App\Models\Skill;
use Illuminate\Http\Request;

class SkillController extends Controller
{
    function index()
    {
        return view('backend.skill.index', [
            'skill' => Skill::get()
        ]);
    }

    function add()
    {
        return view('backend.skill.add');
    }

    function create(Request $request)
    {
        $judul = $request->judul;
        $persen = $request->persen;

        $create = Skill::create([
            'judul' => $judul,
            'persen' => $persen,
        ]);

        return redirect('/skill');
    }

    function edit($id)
    {
        $skill = Skill::find($id);

        return view('backend.skill.edit', [
            'skill' => $skill
        ]);
    }

    function update(Request $request)
    {
        $id = $request->id;
        $judul = $request->judul;
        $persen = $request->persen;

        $skill = Skill::find($id);

        $skill->update([
            'judul' => $judul,
            'persen' => $persen,
        ]);

        return redirect('skill');
    }

    function delete($id)
    {
        $skill = Skill::find($id);
        $skill->delete();

        return redirect()->back();
    }
}
