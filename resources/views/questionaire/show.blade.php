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

                {{-- Collapsible accordian for ansers --}}
                <div id="accordion">


                    @foreach ($questionaire->question as $key=> $question )
                    <div class="card">
                        <div class="card-header" id="headingOne">
                            <div class="row">
                                <div class="col-1" data-toggle="collapse" onclick="toggleChevron(event)" data-target="#collapse{{$key}}" style="cursor: pointer"><i class="fas fa-chevron-down"></i></div>
                                <h5 class="mb-0 col-7" >
                                    {{$question->question}}
                                </h5>
                                <div class="col-4 d-flex flex-row-reverse align-items-center">
                                <form method="POST" action="/questionaires/{{$questionaire->id}}/questions/{{$question->id}}" class="">
                                        @method("DELETE")
                                        @csrf
                                        <a href="#" class="text-dark" onclick="alertDelete(this)"><i class="d-block ml-auto fas fa-trash"></i></a>
                                    </form>
                                    <a href="#" class="d-block mr-3 text-dark"><i class="fas fa-edit"></i></a>

                                </div>
                            </div>
                            
                        </div>
                  
                        <div id="collapse{{$key}}" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                            <div class="card-body">
                                
                                @foreach ($question->answer as $answer)
                                    <li class="list-group-item d-flex justify-content-between">
                                        <div>
                                            {{$answer->answer}}  
                                        </div>
                                        <div>
                                            @if($question->responses->count())
                                            <span class="badge badge-info">{{intVal($answer->responses->count()/$question->responses->count()*100)}}%</span>
                                            @endif
                                        </div>
                                    </li>
                                @endforeach
                            
                            </div>
                        </div>
                    </div> 
                    @endforeach


                </div> 
            </div>
            
        </div>

        
    </div>
</div>
@endsection