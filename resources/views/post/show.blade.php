@extends('components.app-layout')
@section('title')
    POSTS
@endsection
@section('content')
    <h1>Titulo: {{$post->title}}</h1>
    <p>
        <b>Category:</b>
        {{$post->category}}
    </p>
    <p>
        {{$post->content}}
    </p>

    <a href="/post">REGRESAR</a>
@endsection
