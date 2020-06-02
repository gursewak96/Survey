
@extends('layouts.app_survey')

@section('banner')
<div class="jumbotron jumbotron-fluid">
    <div class="container">
    <h1 class="display-4 text-center">{{$questionaire->title}}</h1>
    <p class="lead text-center">{{$questionaire->purpose}}</p>
      <hr class="my-4">
        <div>
            <p class="text-muted">Created By: Author Name</p>
        </div>
    </div>
</div>
@endsection

@section('content')
    <form action="/surveys/{{$questionaire->id}}-{{Str::slug($questionaire->title)}}" method="POST" class="container">
        @csrf
        @foreach ($questionaire->question as $key=>$question )
        <div class="card mb-3">
        <h5 class="card-header bg-primary text-white"><span class="badge badge-light mr-3" style="display: inline-block">{{$key+1}}</span>{{$question->question}}</h5>
            <div class="card-body">

                @error('response.'.$key.'.answer_id')
                    <small class="text-danger"><i class="text-dark fas fa-grin-beam-sweat"></i> You forgot to answer this question...</small>
                @enderror

                <ul class="list-group">
                    @foreach ($question->answer as $answer )
                        <label for="answer{{$answer->id}}">
                            <li class="list-group-item">
                            <input type="radio" name="response[{{$key}}][answer_id]" value="{{$answer->id}}" 
                                {{(old('response.'.$key.'.answer_id') == $answer->id) ? "checked" : ""}}
                                id="answer{{$answer->id}}" class="mr-2"/>
                                {{$answer->answer}}
                            </li>
                            <input type="hidden" name="response[{{$key}}][question_id]" value="{{$question->id}}"/>
                        </label>
                    @endforeach
                </ul>
            </div>
        </div>
        @endforeach

        {{-- Person's information submitting the Survey --}}
        <div class="card mb-3">
            <div class="card-header bg-dark text-light">Your Information</div>
            <div class="card-body">

                <div class="form-group">
                    <label for="name">What's your name:</label>
                <input type="text" class="form-control" name="survey[name]" value="{{old('survey.name')}}" placeholder="Enter name" id="name">
                    <small id="nameHelp" class="form-text text-muted">Hello! what's your name?</small>
                    @error('survey.name')
                    <small class="text-danger">{{$message}}</small>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="email">Email address:</label>
                <input type="email" class="form-control" name="survey[email]" value="{{old('survey.email')}}" placeholder="Enter email" id="email">
                    <small id="emailHelp" class="form-text text-muted">Your email please</small>
                    @error('survey.email')
                    <small class="text-danger">{{$message}}</small>
                    @enderror
                </div>
                  
            </div>
            
          </div>
        

        <input type="submit" value="Submit Survey" class="btn btn-dark">
    </form>
    
@endsection