@extends('layouts.app')

@section('title')
    Create todo
@endsection

@section('content')
<h1 class="text-center my-5"> Create Todos</h1>

<div class="row justify-content-center">
    <div class="col-md-8">
       <div class="card card-default">

        <div class="card-header">Create New Todo</div>

        <div class="card-body">
            @if ($errors->any())
                <div class="alert alert-danger">
                        @foreach ($errors->all() as $error)
                                {{$error}}
                                <br>
                        @endforeach
                </div>                
            @endif
            <form action="/store-todo" method="POST">
                @csrf
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Name" name="name">
                </div>
                <br>
                <div class="form-group">
                    <textarea name="description" class="form-control" placeholder="Description" cols="5" rows="5"></textarea>
                </div>
                <br>
                <div class="form-group text-center">
                    <button class="btn btn-success" type="submit">Create Todo</button>
                </div>
            </form>
        </div>

       </div>
    </div>
</div>
    
@endsection