<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QuizController extends Controller
{
    public function store(Request $request)
    {
        return view('quizzes.index');
    }
}
