@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <a href="/questionaire/create" class="btn btn-dark">Create New Questionaire</a>
                </div>
     
            </div>

            @foreach ($questionaires as $questionaire )
                <div class="card mt-2">
                    <div class="card-header d-flex align-items-center lead"><a class="d-block" href={{$questionaire->path()}}>{{$questionaire->title}}</a>
                    <form method="POST" action={{$questionaire->path()}} class="d-block ml-auto">
                            @method("DELETE")
                            @csrf
                            <a href="#" class="text-dark" onclick="alertDelete(this);"><i class="d-block ml-auto fas fa-trash"></i></a>
                        </form>
                    </div>
                    <div class="card-body">
                    {{$questionaire->purpose}}
                    </div>
                    <div class="card-footer text-muted p-1 d-flex justify-content-between align-items-center">
                        <div class="ml-2">
                            @if($questionaire->surveys()->count())
                            <span class="badge badge-info">{{$questionaire->surveys()->count()}} submitions</span>
                            @endif
                        </div>
                        <div>
                            <a href={{$questionaire->path()}} class="btn btn-dark"><i class="fas fa-edit"></i></a>
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal{{$questionaire->id}}">
                                <i class="fas fa-share-alt"></i>
                            </button>
                        </div>
                    </div>
                </div>

                {{-- Modal for the sharing the link --}}
                @include('components.modals', ['questionaire' => $questionaire])
            @endforeach
        </div>
    </div>
</div>
@endsection
