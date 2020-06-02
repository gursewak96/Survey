<?php

namespace App\Http\Controllers;


use App\Questionaire;

class SurveyController extends Controller
{
    public function show(Questionaire $questionaire, $slug){
        $questionaire->load('question.answer');
        return view('surveys.show',compact('questionaire'));
    }

    public function store(Questionaire $questionaire){
        //  dd(request()->all());
        $data = request()->validate([
            'response.*.answer_id'=>"required",
            'response.*.question_id'=>'required',
            'survey.name' => 'required',
            'survey.email' =>'required|email',

        ]);
        
        $survey = $questionaire->surveys()->create($data['survey']);
        $survey->responses()->createMany($data['response']);
        return "Thank You";
    }
}
