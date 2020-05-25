@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Create New Question</div>

                <div class="card-body">
                    <form action="/questionaires/{{$questionaire->id}}/questions" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="question">Question</label> 
                        <input class="form-control" id="title" name="question[question]" value="{{old('question.question')}}"  placeholder="Enter Question" type="text"> 
                            <span class="form-text small text-muted">Ask simple and to-the-point question for better response.</span>
                            @error('title')
                            <div>
                            <span class="text-danger ">{{$message}}</span>
                            </div>
                            @enderror
                            
                        </div>
                        <div class="form-group">
                            <fieldset>
                                <legend>Choices</legend>
                                <span class="form-text small text-muted">Give choices that give more insight into your question.</span>
                                
                                <div class="">
                                    <label for="answer1">Choice 1</label> 
                                    <input class="form-control" 
                                        id="answer1" 
                                        name="answer[][answer]" 
                                        placeholder="Enter Choice 1"
                                        value="{{old('answer[0][answer]')}}" 
                                        type="text"> 
                                   
                                    @error('answer.0.answer')
                                        <div>
                                        <span class="text-danger ">{{$message}}</span>
                                        </div>
                                    @enderror
                                </div>

                                <div class="">
                                    <label for="answer2">Choice 2</label> 
                                    <input class="form-control" 
                                        id="answer2" 
                                        name="answer[][answer]" 
                                        value="{{old('answer.1.answer')}}"
                                        placeholder="Enter Choice 2" 
                                        type="text"> 
                                 
                                    @error('answer.1.answer')
                                        <div>
                                        <span class="text-danger ">{{$message}}</span>
                                        </div>
                                    @enderror
                                </div>

                                <div class="">
                                    <label for="answer3">Choice 3</label> 
                                    <input class="form-control" 
                                        id="answer1" 
                                        name="answer[][answer]" 
                                        value="{{old('answer.2.answer')}}"
                                        placeholder="Enter Choice 3" 
                                        type="text"> 
                                   
                                    @error('answer.2.answer')
                                        <div>
                                        <span class="text-danger ">{{$message}}</span>
                                        </div>
                                    @enderror
                                </div>

                                <div class="">
                                    <label for="answer4">Choice 4</label> 
                                    <input class="form-control" 
                                        id="answer4" 
                                        name="answer[][answer]" 
                                        value="{{old('answer.3.answer')}}"
                                        placeholder="Enter Choice 4" 
                                        type="text"> 
                                   
                                    @error('answer.3.answer')
                                        <div>
                                        <span class="text-danger ">{{$message}}</span>
                                        </div>
                                    @enderror
                                </div>
                            </fieldset>
                        </div>
                        
                        <input type="submit" value="Add Question" class="btn btn-dark"/>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection