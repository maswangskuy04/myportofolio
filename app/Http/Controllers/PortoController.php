<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class PortoController extends Controller
{
    public function portofolio()
    {
        return view('portofolio.home');
    }

    public function home()
    {
        $users = User::first();
        return view('portofolio.home', compact('users'));
    }

    public function about()
    {
        $users = User::first();
        return view('portofolio.page.about', compact('users'));
    }
}
