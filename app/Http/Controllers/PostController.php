<?php

namespace App\Http\Controllers;

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
        return view('posts.create');
    }

    public function store()
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

        //validate the field
        $attr = request()->validate([
            'title' => 'required|unique:posts|max:255',
            'body' => 'required|min:3',
        ]);

        //assign the title to the slug
        $attr['slug'] = \Str::slug(request('title'));

        //create new post
        Post::create($attr);

        return back();
    }
}
