@extends('layouts.app')

@section('title')
    Update todo
@endsection

@section('content')
<h1 class="text-center my-5"> Update Todos</h1>

<div class="row justify-content-center">
    <div class="col-md-8">
       <div class="card card-default">

        <div class="card-header">Update Todo</div>

        <div class="card-body">
            @if ($errors->any())
                <div class="alert alert-danger">
                        @foreach ($errors->all() as $error)
                                {{$error}}
                                <br>
                        @endforeach
                </div>                
            @endif
            <form action="/todos/{{$todo->id}}/update" method="POST">
                @csrf
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Name" name="name" value="{{ $todo->name }}">
                </div>
                <br>
                <div class="form-group">
                    <textarea name="description" class="form-control" placeholder="Description" cols="5" rows="5">{{ $todo->description }}</textarea>
                </div>
                <br>
                <div class="form-group text-center">
                    <button class="btn btn-success" type="submit">Update Todo</button>
                </div>
            </form>
        </div>

       </div>
    </div>
</div>
    
@endsection