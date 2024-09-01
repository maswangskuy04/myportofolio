<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

use function Laravel\Prompts\password;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::all();
        return view('user.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('user.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_lengkap' => 'required|string',
            'alamat' => 'required|string|max:50',
            'email' => 'email|required|unique:users',
            'ttl' => 'required',
            'hobi' => 'required|string',
            'password' => 'required|min:7',
            'gambar' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);

        if($request->hasFile('gambar')) {
            $image = $request->file('gambar');
            $path = $image->store('public/image');
            $name = basename($path);
        }

        User::create([
            'nama_lengkap' => $request->nama_lengkap,
            'alamat' => $request->alamat,
            'email' => $request->email,
            'ttl' => $request->ttl,
            'hobi' => $request->hobi,
            'password' => Hash::make($request->password),
            'gambar' => $name
        ]);

        return redirect()->to('user')->with('message', 'Data User berhasil ditambah brooh!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $edit = User::findOrFail($id);
        return view('user.edit', compact('edit'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $users = User::findOrFail($id);

        if($request->hasFile('gambar')) {
            if($users->gambar) {
                Storage::delete('public/image/' . $users->gambar);
            }

            $image = $request->file('gambar');
            $path = $image->store('public/image');
            $name = basename($path);
            $users->gambar = $name;
        }

        User::where('id', $id)->update([
            'nama_lengkap' => $request->nama_lengkap,
            'email' => $request->email,
            'alamat' => $request->alamat,
            'ttl' => $request->ttl,
            'hobi' => $request->hobi,
            'password' => ($request->password ? Hash::make($request->password) : $users->password),
            'gambar' => $name
        ]);

        return redirect()->to('user')->with('message', 'Data Profile berhasil diupdate brooh!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $user = User::findOrFail($id);

        if($user) {
            $user->delete();
        }

        return redirect()->to('user')->with('message', 'Data User telah dihapus brooh!');
    }
}
