@extends('layouts.app')
@section('content')

    <main role="main" class="container">
            <div class="jumbotron text-center">
                    <h1 class="display-3">{{$title}}</h1>
                    <p>This is index page</p>
                    <p><a class="btn btn-primary btn-lg" href="dashboard" role="button">Go to Dashboard &raquo;</a></p>
            </div>
          </main>
@endsection