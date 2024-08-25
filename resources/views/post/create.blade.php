@extends('components.app-layout')
@section('title')
    Crear POSTS
@endsection
@section('content')
    <h1>Crear Post</h1>
    <form action="{{ route('posts.store') }}" method="post">
        
        @csrf

        <label for="">Titulo
            <input type="text" name="title" id="title" value="{{old('title')}}">
        </label>
        @error('title')
        <p>{{$message}}</p>
        @enderror
        
        <br>
        <br>
        
        <label for="">Categoria
            <input type="text" name="category" id="category" value="{{old('category')}}">
        </label>
        @error('category')
        <p>{{$message}}</p>
        @enderror

        <br>
        <br>
        
        <label for="">Contenido
            <textarea name="content" id="content"  >{{old('content')}}</textarea>
        </label>
        @error('content')
        <p>{{$message}}</p>
        @enderror
        
        <br>
        <br>
        <input type="submit" value="Crear Post">
    </form>
@endsection
