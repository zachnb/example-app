<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Controllers\Controller;

class SignUpController extends Controller
{
    public function index()
    {
        return view('signup');
    }

    public function store(Request $request)
    {
        // Validate the input
        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'username' => 'required|unique:users',
            'password' => 'required|min:8',
            'english_proficiency' => 'required',
            // Add other validation rules here
        ]);

        // Create a new user
        $user = new User();
        $user->first_name = $request->input('first_name');
        $user->last_name = $request->input('last_name');
        $user->username = $request->input('username');
        $user->password = bcrypt($request->input('password'));
        $user->english_proficiency = $request->input('english_proficiency');

        // Store availability data
        foreach (['monday', 'tuesday', 'wednesday', 'thursday', 'friday'] as $day) {
            $availability = $request->input($day . '_availability');
        
        // Save the user to the database
        $user->save();
        }

        // Redirect to a success page
        return redirect()->route('login')->with('success', 'Account created successfully');
    }
}
