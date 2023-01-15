<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet" >

    <title>
        @yield('title')
    </title>
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
          <a class="navbar-brand" href="/">ToDos App</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="/todos">Todos</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="/new-todo">Create Todo</a>
              </li>
            </ul>
            
          </div>
        </div>
      </nav>

    <div class="container">
      <br>
      @if (session()->has('success'))
        <div class="alert alert-success">
          {{session()->get('success')}}  
        </div>          
      @endif

      {{-- @if (session()->has('danger'))
        <div class="alert alert-danger">
          {{session()->get('danger')}}  
        </div>          
      @endif --}}

      @yield('content')
    </div>
</body>
</html>