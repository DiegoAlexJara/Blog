@extends('components.app-layout')
@section('title')
    Crear POSTS
@endsection
@section('content')
    <h1>Crear Post</h1>
    <form action="{{ route('posts.create') }}" method="post">
        
        @csrf

        <label for="">Titulo
            <input type="text" name="title" id="title">
        </label>
        
        <br>
        <br>
        
        <label for="">Categoria
            <input type="text" name="category" id="category">
        </label>
        
        <br>
        <br>
        
        <label for="">Contenido
            <textarea name="content" id="content" ></textarea>
        </label>
        
        <br>
        <br>
        <input type="submit" value="Crear Post">
    </form>
@endsection
