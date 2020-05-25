<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Questionaire;

class QuestionController extends Controller
{
    public function create(Questionaire $questionaire){
        return view('question.create',compact('questionaire'));
    }

    public function store(Questionaire $questionaire){
        
        $data = request()->validate([
            'question.question' => "required",
            'answer.*.answer' => "required",
        ]);
        $question = $questionaire->question()->create($data['question']);
        $question->answer()->createMany($data['answer']);
        
        return redirect("/questionaire/$questionaire->id");
    }
}
