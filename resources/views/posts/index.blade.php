@extends('layouts.app')

@section('content')
    <div class="col-4 text-center">
        <h1 class="blog-header-logo text-dark" href="#" style="font-size:2.25rem; font-family: 'Playfair Display', Georgia, 'Times New Roman', serif;">Posts</h1>
    </div>
    @if(count($posts) > 0)
        @foreach($posts as $post)
        <div class="row mb-2">
            <div class="col-md-6">
                <div class="card flex-md-row mb-4 shadow-sm h-md-250">
                    <div class="card-body d-flex flex-column align-items-start">
                    <h3 class="mb-0"><a class="text-dark" href="posts/{{$post->id}}">{{$post->title}}</a></h3>
                        <small class="mb-1 text-muted">Written on {{$post->created_at}} by {{$post->user->name}}</small>
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