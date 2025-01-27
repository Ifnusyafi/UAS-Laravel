<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    // Login Form
    public function showLoginForm()
    {
        return view('auth.login');
    }

    // Login Logic
    public function login(Request $request)
    {
        // Validate the input
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // Attempt login using provided credentials
        if (Auth::attempt([
            'email' => $request->email,
            'password' => $request->password
        ], $request->remember)) {
            // Redirect to intended route (usually the dashboard)
            return redirect()->intended('dashboard');
        }

        // If authentication fails, return with error
        return back()->withErrors([
            'email' => 'These credentials do not match our records.',
        ]);
    }

    // Logout Logic
    public function logout(Request $request)
    {
        Auth::logout();

        // Invalidate session and regenerate token for security
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }
}
