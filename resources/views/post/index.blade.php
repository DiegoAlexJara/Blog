@extends('components.app-layout')
@section('title')
    POSTS
@endsection
@section('content')
    <h1>POST</h1>
    <table class="table">
        <thead>
            <tr>
               <th scope="col">#</th>
                <th scope="col">Titulo</th>
                <th scope="col">Category</th>
                <th scope="col">Content</th>
                
            </tr>
        </thead>
        <tbody>
            @foreach ($posts as $buscar)
                <tr>

                    <th>{{ $buscar->id }}</th>

                    <th>{{ $buscar->title }}</th>
                    <th>{{ $buscar->category }}</th>
                    <th>{{ $buscar->content }}</th>
                    <th> 
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                            Acciones
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="{{ route('posts.edit', $buscar->id) }}">Modificar</a></li>
                            <li><a class="dropdown-item" href="{{ route('posts.destroy', $buscar->id) }}">Eliminar</a></li>
                        </ul>
                    </th>
                </tr>
            @endforeach

        </tbody>
    </table>
    {{ $posts->links() }}
@endsection
