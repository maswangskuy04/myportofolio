<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $profiles = Profile::all();
        return view('profile.index', compact('profiles'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('profile.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_profile' => 'required',
            'alamat' => 'required',
            'email' => 'email|required',
            'gambar' => 'required|image|mimes:png,jpg,jpeg,jfif,gif,svg'
        ]);

        if($request->hasFile('gambar')) {
            $image = $request->file('gambar');
            $path = $image->store('public/image');
            $name = basename($path);
        }

        Profile::create([
            'nama_profile' => $request->nama_profile,
            'alamat' => $request->alamat,
            'email' => $request->email,
            'gambar' => $name
        ]);

        return redirect()->to('profile')->with('message', 'Data profile berhasil ditambah brooh!');
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
