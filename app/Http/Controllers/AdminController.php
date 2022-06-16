<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function login(Request $request)
    {
        if (Auth::check())
            return redirect()->route('dashboard')->with('info', 'You already logged in.');

        if ($request->isMethod('post')) {

        }

        return view('admin.auth.login');
    }
}
