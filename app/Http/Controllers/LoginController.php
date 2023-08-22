<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;

class LoginController extends Controller
{
    public function index()
    {
        return view('login');
    }

    public function login(Request $request)
{
    $credentials = $request->only('username', 'password');

    if (Auth::attempt($credentials)) {
        // Authentication successful
        $user = Auth::user();
        if ($user->english_proficiency === 'beginner') {
            return redirect()->route('beginner');
        } elseif ($user->english_proficiency === 'intermediate') {
            return redirect()->route('intermediate');
        } elseif ($user->english_proficiency === 'advanced') {
            return redirect()->route('advanced');
        }
    }

    // Authentication failed
    return redirect()->back()->withInput($request->only('username'))->withErrors([
        'login_failed' => 'Invalid username or password',
    ]);
}

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }
}