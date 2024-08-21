@extends('components.app-layout')
@section('title')
    Edit POSTS
@endsection
@section('content')
    <h1>Modificar Post</h1>
    <form action="/post/{{ $post->id }}" method="POST">

        @csrf
        @method('PUT')
        
        <label for="">Titulo
            <input type="text" name="title" id="title" value="{{ $post->title }}">
        </label>

        <br>
        <br>

        <label for="">Categoria
            <input type="text" name="category" id="category" value="{{ $post->category }}">
        </label>

        <br>
        <br>

        <label for="">Contenido
            <textarea name="content" id="content">{{ $post->content }}</textarea>
        </label>

        <br>
        <br>
        <input type="submit" value="Modificar Post">
    </form>
@endsection
