<?php

namespace App\Http\Controllers;

use App\Models\Skill;
use Illuminate\Http\Request;

class SkillController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $skills = Skill::all();
        return view('skill.index', compact('skills'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('skill.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'keahlian' => 'required|string',
            'deskripsi' => 'required|string'
        ]);

        Skill::create([
            'keahlian' => $request->keahlian,
            'deskripsi' => $request->deskripsi
        ]);

        return redirect()->to('skill')->with('message', 'Data Skill berhasil ditambah brooh!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $edit = Skill::findOrFail($id);
        return view('skill.edit', compact('edit'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        Skill::where('id', $id)->update([
            'keahlian' => $request->keahlian,
            'deskripsi' => $request->deskripsi
        ]);

        return redirect()->to('skill')->with('message', 'Data Skill berhasil diupdate brooh!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
