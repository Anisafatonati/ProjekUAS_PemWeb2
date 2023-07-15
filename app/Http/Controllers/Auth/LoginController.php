<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('pages.auth.login');
    }

    public function login(Request $request)
    {
        $input = $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        if (Auth::attempt($input)) {
            return redirect('/kegiatan');
        } else {
            return redirect()->back()->with('error', 'Invalid credentials. Please try again.');
        }
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/login');
    }
}
