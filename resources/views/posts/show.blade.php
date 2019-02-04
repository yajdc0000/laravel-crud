@extends('layouts.app')

@section('content')
    <div class="row">
    <a href="/lsapp/public/posts" class="btn btn-sm btn-secondary">Go Back</a>
    </div>
    <div class="col-4 text-center">
    <h1 class="blog-header-logo text-dark" href="#" style="font-size:2.25rem; font-family: 'Playfair Display', Georgia, 'Times New Roman', serif;">{{$post->title}}</h1>
    </div>
   
        <div class="row mb-2">
            <div class="col-md-12">
                <div class="card flex-md-row mb-4 shadow-sm h-md-250">
                    <div class="card-body flex-column align-items-start">
                        {!!$post->body!!}
                        <small class="mb-1 text-muted">Written on {{$post->created_at}} by {{$post->user->name}}</small>
                        <hr>
                        <a href="/lsapp/public/posts/{{$post->id}}/edit" class="btn btn-sm btn-info">Edit</a>
                        {!!Form::open(['action' => ['PostsController@destroy',$post->id],'method'=>'POST','class'=>'float-right'])!!}
                            {{Form::hidden('_method','DELETE')}}
                            {{Form::submit('Delete',['class'=>'btn btn-danger float-right'])}}
                        {!!Form::close()!!}
                    </div>
                </div>
            </div>
        </div>
    
@endsection