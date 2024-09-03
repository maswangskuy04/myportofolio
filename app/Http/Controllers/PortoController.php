<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class PortoController extends Controller
{
    public function layout()
    {
        $users = User::first();
        return view('ui.layout.app', compact('users'));
    }

    public function profile()
    {
        $users = User::first();
        return view('ui.user', compact('users'));
    }
}
