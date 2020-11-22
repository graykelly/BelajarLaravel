<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostRequest;
use Illuminate\Http\Request;
use App\Post;


class PostController extends Controller
{
    public function index()
    {
        return view('posts.index', [
            'posts' => Post::latest()->paginate(6),
        ]);
    }

    public function show(Post $post)
    {
        return view('posts.show', compact('post'));
    }

    public function create()
    {
        return view('posts.create', ['post' => new Post()]);
    }

    public function store(PostRequest $request)
    {
        // $post = new Post;
        // $post->title = $request->title; //the first post
        // $post->slug = \Str::slug($request->title); //the-first-post
        // $post->body = $request->body;
        // $post->save();

        // Post::create([
        //     'title' => $request->title,
        //     'slug' => \Str::slug($request->title),
        //     'body' => $request->body,
        // ]);

        // $post = $request->all();
        // $post['slug'] = \Str::slug($request->title);
        // Post::create($post);

        $attr = $request->all();

        //assign the title to the slug
        $attr['slug'] = \Str::slug(request('title'));

        //create new post
        Post::create($attr);

        session()->flash('success', 'The post was created');

        return redirect('posts');

        // return back();
    }

    public function edit(Post $post)
    {
        return view('posts.edit', compact('post'));
    }

    public function update(PostRequest $request, Post $post)
    {
        $attr = $request->all();

        $post->update($attr);

        session()->flash('success', 'The post was updated');

        return redirect('posts');
    }

    public function destroy(Post $post)
    {
        $post->delete();

        session()->flash('success', 'The post was deleted');

        return redirect('posts');
    }
}
