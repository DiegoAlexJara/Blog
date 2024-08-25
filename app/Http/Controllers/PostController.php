<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePostRequest;
use App\Models\post;
use Illuminate\Contracts\Pagination\Paginator;
use Illuminate\Http\Request;

class PostController extends Controller
{

    public function index(Request $request)
    {
        $posts = post::orderBy('id', 'desc')->paginate(20);
        return view("post.index", compact('posts'));
    }

    public function create()
    {
        return view('post.create');
    }

    public function show(post $post)
    {
        $post->delete();
        return redirect(route('posts.index'));
    }

    public function store(StorePostRequest $request)
    {
        post::create($request->all());

        return redirect()->route('posts.index');
    }

    public function edit(post $post)
    {
        return view('post.edit', compact('post'));
    }
    
    public function update(post $post, Request $request)
    {
        $request->validate([
            'title' => ['required','min=5', 'max=255'],
            'category' => 'required',
            'content' => 'required',
        ]);
        $post->update   ($request->all());
        return redirect()->route('posts.index');
    }

    public function destroy(post $post)
    {
        $post->delete();
        return redirect()->route('posts.index');
    }
}
