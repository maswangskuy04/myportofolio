<?php

namespace App\Http\Controllers;

use App\Models\Education;
use Illuminate\Http\Request;

class EducationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $educations = Education::all();
        return view('education.index', compact('educations'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('education.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_sekolah' => 'required|max:50',
            'jp' => 'required',
            'tanggal_masuk' => 'date|required',
            'tanggal_keluar' => 'date|required'
        ]);

        Education::create([
            'nama_sekolah' => $request->nama_sekolah,
            'jp' => $request->jp,
            'tanggal_masuk' => $request->tanggal_masuk,
            'tanggal_keluar' => $request->tanggal_keluar
        ]);

        return redirect()->to('education')->with('message', 'Data Education berhasil ditambah brooh!');
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
        $edit = Education::findOrFail($id);
        return view('education.edit', compact('edit'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        Education::where('id', $id)->update([
            'nama_sekolah' => $request->nama_sekolah,
            'jp' => $request->jp,
            'tanggal_masuk' => $request->tanggal_masuk,
            'tanggal_keluar' => $request->tanggal_keluar
        ]);

        return redirect()->to('education')->with('message', 'Data Education berhasil diupdate brooh!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
