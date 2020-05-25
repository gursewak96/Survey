@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

            {{-- Card to create a New Question --}}
            <div class="card">
                <div class="card-body">
                <h1>{{$questionaire->title}}</h1>
                <p class="lead">{{$questionaire->purpose}}</p>
                </div>
                <div class="card-footer">
                <a href="/questionaires/{{$questionaire->id}}/questions/create" class="btn btn-dark">Add Question</a>
                </div>
            </div>

            {{-- List of Questons belongs to current Questionaire --}}
            <div class="list-group mt-3">
                <h3 class="list-group-item list-group-item-action active">
                  Questions
                </h3>
                @foreach ($questionaire->question as $question )
                <a href="#" class="list-group-item list-group-item-action">{{$question->question}}</a>
                @endforeach
              </div>
            
        </div>

        
    </div>
</div>
@endsection