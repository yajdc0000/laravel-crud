@extends('layouts.app')

@section('content')
        <div class="row mb-2">
            <div class="col-md-12">
                    <a href="/lsapp/public/posts" class="btn btn-sm btn-secondary">Go Back</a>
                    <h1 class="blog-header-logo text-dark text-center" href="#" style="font-size:2.25rem; font-family: 'Playfair Display', Georgia, 'Times New Roman', serif;">{{$post->title}}</h1>
                <div class="card flex-md-row mb-4 shadow-sm h-md-250">
                    <div class="card-body flex-column align-items-start">
                            <div class="text-center">
                            <img class="img-fluid rounded" src="{{ url('/') }}/storage/cover_images/{{$post->cover_image}}">
                            </div>
                            <br><br>
                        {!!$post->body!!}
                        <hr style="width:50%;">
                        <small class="mb-1 text-muted">Written on {{$post->created_at}} by {{$post->user->name}}</small>
                        <hr>
                        @if(!Auth::guest())
                            @if(Auth::user()->id = $post->user_id)
                                <a href="/lsapp/public/posts/{{$post->id}}/edit" class="btn btn-info">Edit</a>
                            {!!Form::open(['action' => ['PostsController@destroy',$post->id],'method'=>'POST','class'=>'float-right'])!!}
                                {{Form::hidden('_method','DELETE')}}
                                {{Form::submit('Delete',['class'=>'btn btn-danger float-right'])}}
                            {!!Form::close()!!}
                            @endif
                        @endif
                    </div>
                </div>
            </div>
        </div>
    
@endsection