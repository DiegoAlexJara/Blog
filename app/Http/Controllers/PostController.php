<?php

namespace App\Http\Controllers;

use App\Models\post;
use Illuminate\Http\Request;

class PostController extends Controller
{

    public function index()
    {
        $posts = new post();
        $posts = $posts->all();
        return view("post.index", compact('posts'));
    }

    public function create()
    {
        return view("post.create");
    }

    public function show($post)
    {

        $post = post::find($post);


        return view("post.show", compact('post'));
    }

    public function store(Request $request)
    {

        $post = new post();

        $post->title = $request->title;
        $post->category = $request->category;
        $post->content = $request->content;

        $post->save();

        return redirect('/post');
    }

    public function edit($post)
    {
        $post = post::find($post);
        return view('post.edit', compact('post'));
    }
    public function update($post, Request $request)
    {
        $post = post::find(1);
        $post->title = $request->title;
        $post->category = $request->category;
        $post->content = $request->content;
        $post->save();
        return redirect('post');
    }

    public function delete($post)
    {

        $post = post::find($post);
        $post->delete();
        return redirect('/post');
    }
}
