@extends('layouts.app')

@section('content')
    <div class="col-4 text-center">
        <h1 class="blog-header-logo text-dark" href="#" style="font-size:2.25rem; font-family: 'Playfair Display', Georgia, 'Times New Roman', serif;">Edit Posts</h1>
    </div>
    {!! Form::open(['action' => ['PostsController@update',$post->id],'method'=>'POST','enctype'=>'multipart/form-data']) !!}
    <div class="form-group">
        {{form::label('title','Title')}}
        {{form::text('title',$post->title,['class'=>'form-control','placeholder'=>'Title'])}}
    </div>
    <div class="form-group">
            {{form::label('body','Body')}}
            {{form::textarea('body',$post->body,['id'=>'article-ckeditor','class'=>'form-control','placeholder'=>'Body Text'])}}
        </div>
        <div class="form-group">
                {{Form::file('cover_image')}}
        </div>
        {{Form::hidden('_method','PUT')}}
        {{Form::submit('Submit',['class'=>'btn btn-primary'])}}
    {!! Form::close() !!}
@endsection