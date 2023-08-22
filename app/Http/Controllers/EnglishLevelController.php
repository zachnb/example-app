<?php 

namespace App\Http\Controllers;

//use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EnglishLevelController extends Controller
{
    public function beginner()
    {
        $user = Auth::user();
        $englishLevel = $user->english_level;

        return view('beginner', compact('englishLevel'));
    }

    public function intermediate()
    {
        $user = Auth::user();
        $englishLevel = $user->english_level;

        return view('intermediate', compact('englishLevel'));
    }

    public function advanced()
    {
        $user = Auth::user();
        $englishLevel = $user->english_level;

        return view('advanced', compact('englishLevel'));
    }
}