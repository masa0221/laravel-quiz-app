<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QuizController extends Controller
{
    public function store(Request $request)
    {
        return view('quizzes.index');
    }

    public function destroy($id)
    {
        return json_encode(['message' => 'ID:'.$id.' が削除されるIDです(仮の出力)']);
    }
}
