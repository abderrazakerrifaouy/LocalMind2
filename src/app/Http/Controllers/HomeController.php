<?php

namespace App\Http\Controllers;

use App\Models\Question;
use Illuminate\Http\Request;

class HomeController
{
    public function index()
    {
        $questions = Question::with('user')->latest()->get();
        return view('user.home', compact('questions'));
    }
    
}
