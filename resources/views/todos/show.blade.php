@extends('layouts.app')

@section('title')
 {{$todo->name}}
@endsection

@section('content')
<h1 class="text-center my-5">{{$todo->name}}</h1>
<div class="row justify-content-center">
    <div class="col-md-6">
        <div class="card">
            <div class="card-header">
                Details
            </div>
            <div class="card-body">
                {{$todo->description}}
            </div>
        </div>
        <br>
        <a class="btn btn-info" href="/todos/{{$todo->id}}/edit">Edit</a>
        <a class="btn btn-danger" onclick="return confirm('Are you sure?')" href="/todos/{{$todo->id}}/delete">Delete</a>
    </div>
</div>
@endsection