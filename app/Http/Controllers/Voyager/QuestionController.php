<?php

namespace App\Http\Controllers\Voyager;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Answer;

class QuestionController extends Controller
{
    public function answers(Request $repuest, $questionId){
        $data['answers'] = Answer::where('question_id', $questionId)->get();

        return view('admin.questions.answer', $data);
    }
}
