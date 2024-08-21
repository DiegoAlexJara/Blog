<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Models\post;

Route::get('/', [HomeController::class, "index"]);

Route::get('/post',[PostController::class, "index"]);

Route::get('/post/create', [PostController::class, "create"]);

Route::get('/post/{post}/{category?}', [PostController::class, "show"]);

Route::get('prueba', function(){
    /*
    // Crear Nuevo Post
    $post = new post();
    $post->title = 'Titulo De Prueba 1';
    $post->content = 'Contenido DE Prueba 1';
    $post->category = 'Categoria De Prueba 1';
    $post->save();
    // */

    /*
    // Actualizar Un Post
    $post = post::find(1); 
    $post->title = 'Nuevo Titulo 1';
    $post->save();
    return $post;
    */
    /*
    Eliminar Un Post
    $post = post::find(1);
    $post->delete();
    */
    
    // $post = post::where('title','Titulo De Prueba 2')->first(); //Unico Registro
    // $post = post::where('id','>=','1')->get(); //Multiples Registros
    // $post = post::select('id')->orderBy('id', 'desc')->get();
    // return $post;
});