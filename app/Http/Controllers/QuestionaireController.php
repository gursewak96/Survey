<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QuestionaireController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index(){
        $questionaires = auth()->user()->questionaire;
        return view('home',compact('questionaires'));
    }
    public function create(){
        return view('questionaire/create');
    }

    public function store(){
        $data = request()->validate([
            'title'=>"required",
            'purpose'=>"required"
        ]);
        
        $questionaire = auth()->user()->questionaire()->create($data);

        return redirect("/questionaire/$questionaire->id");
    }

    public function show(\App\Questionaire $questionaire){
        $questionaire->load('question.answer.responses');
        
        return view('questionaire.show',compact('questionaire'));
    }

    public function update(\App\Questionaire $questionaire){
        
    }

    public function destroy(\App\Questionaire $questionaire){
        $questionaire->delete();
        return redirect()->back();

    }
}
