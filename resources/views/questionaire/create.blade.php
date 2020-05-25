@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Create New Questionaire</div>

                <div class="card-body">
                    <form action="/questionaire" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="title">Title</label> 
                            <input class="form-control" id="title" name="title"  placeholder="Enter Title" type="text"> 
                            <span class="form-text small text-muted">Give your questionaire a title that attracts attention.</span>
                            @error('title')
                            <div>
                            <span class="text-danger ">{{$message}}</span>
                            </div>
                            @enderror
                            
                        </div>
                        <div class="form-group">
                            <label for="purpose">Purpose</label> 
                            <input class="form-control" id="purpose" name="purpose" placeholder="Enter Purpose" type="text"> 
                            <span class="form-text small text-muted">Giving a purpose increase responses.</span>
                            @error('purpose')
                            <div>
                            <span class="text-danger ">{{$message}}</span>
                            </div>
                            @enderror
                        </div>
                        <input type="submit" value="Create Questionaire" class="btn btn-dark"/>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection