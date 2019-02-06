@extends('layouts.app')

@section('content')
    
        <h1 class="blog-header-logo text-dark" href="#" style="font-size:2.25rem; font-family: 'Playfair Display', Georgia, 'Times New Roman', serif;">Posts</h1>

    @if(count($posts) > 0)
        @foreach($posts as $post)
        <div class="card card-body bg-dark">
            <div class="row">
                <div class="col-md-4 col-sm-4">
                    <img style="width:100%" class="img-fluid rounded" src="storage/cover_images/{{$post->cover_image}}">
                </div>
                <div class="col-md-8 col-sm-8">
                    <h3 class="mb-0"><a class="text-light" href="posts/{{$post->id}}">{{$post->title}}</a></h3>
                        <small class="mb-1 text-light">Written on {{$post->created_at}} by {{$post->user->name}}</small>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
        {{$posts->links()}}
    @else
    <p>No posts found
    @endif
    
@endsection