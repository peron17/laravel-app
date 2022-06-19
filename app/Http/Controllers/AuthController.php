<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    /**
     * Login admin
     */
    public function loginAdmin(Request $request)
    {
        if (Auth::check())
            return redirect()->route('admin.dashboard')->with('info', 'You already logged in');

        if ($request->isMethod('post')) {
            $filter = [
                'email' => 'required|email|exists:users,email',
                'password' => 'required'
            ];

            $message = [
                'email.exists' => 'Email is not registered'
            ];

            $creds = $request->validate($filter, $message);
            if (Auth::attempt($creds)) {
                return redirect()->route('admin.dashboard')->with('success', 'Logged in');
            }

            return redirect()->back()->with('error', 'Login failed');

        } else
            return view('admin.auth.login');
    }

    /**
     * Logout general
     */
    public function logout()
    {
        if (!Auth::check())
            return redirect()->route('web.logout');
        else {
            $isAdmin = Auth::user()->roles->is_admin == 1 ? true : false;

            Session::flush();
            Auth::logout();

            if ($isAdmin)
                return redirect()->route('admin.login');

            return redirect()->route('web.login');
        }
    }
}
