<?php

namespace App\Http\Controllers;

use App\Test;
use App\Question;
use App\Answer;

class HomeController extends Controller
{
    public function index()
    {
        $questions = Question::selectRaw('
            questions.*, 
            answers.name as aname,
            answers.id as aid
            '
        )          
        ->leftJoin('answers', 'questions.id', '=', 'answers.question_id')
        ->whereRaw('count(answers.id) > ? ', array(0))
        ->paginate(5);
        dd($questions);
    }
}
