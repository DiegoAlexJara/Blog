<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;

Route::get('/', [HomeController::class, "index"]);

Route::get('/post',[PostController::class, "index"]);

Route::get('/post/create', [PostController::class, "create"]);

Route::get('/post/{post}/{category?}', [PostController::class, "show"]);
