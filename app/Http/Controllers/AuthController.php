<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function showLogin()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        $username = $request->username;
        $password = $request->password;

        // بيانات ثابتة (للامتحان)
        if ($username == "admin" && $password == "1234") {
            session(['user' => $username]);
            return redirect('/');
        }

        return back()->with('error', 'Invalid login');
    }

    public function logout()
    {
        session()->forget('user');
        return redirect('/login');
    }
}
