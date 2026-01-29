<?php

namespace App\Http\Controllers;

use App\Models\Question;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class QuestionController
{
    public function create(){
        return view('user.createQestion');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'location' => 'nullable|string|max:255',
        ]);

        Question::create([
            'title' => $request->title,
            'content' => $request->content,
            'location' => $request->location,
            'user_id' => Auth::id(), 
        ]);

        return redirect()->route('dashboardUser')->with('success', 'Your question has been posted!');
    }
    public function show($id){
        $question = Question::find($id);
        return view('user.show', compact('question'));
    }
}
