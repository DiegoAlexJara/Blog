<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Models\post;

Route::get('/', [HomeController::class, "index"]);

Route::resource('articulos', PostController::class)
    ->names('posts');

