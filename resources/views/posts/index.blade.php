@extends('layouts.app')

@section('content')
<div class="container">
    <div class="d-flex justify-content-between">
        <div>
            <h3>All Posts</h3>
            <hr>
        </div>
    
    <div>
        <a href="/posts/create" class="btn btn-primary">New Post</a>
    </div>
    </div>
    
        <div class="row">
        
            @forelse ($posts as $post)
            <div class="col-md-4">
                <div class="card mb-4">
                    <div class="card-header bg-secondary text-center">
                        {{ $post->title }}
                    </div>
                    <div class="card-body bg-light">
                        <div>
                            {{ Str::limit($post->body, 100, '...') }}
                        </div>
                        <a href="/posts/{{ $post->slug }}">Read more</a>
                    </div>
                    <div class="card-footer d-flex justify-content-between">
                        Published on {{ $post->created_at->diffForHumans() }}
                        <a href="/posts/{{ $post->slug }}/edit" class="btn btn-sm btn-success">Edit</a>
                    </div>
                </div>
            </div>
            @empty
                <div class="col-md-2">
                    <div class="alert alert-info">
                        There's no Posts
                    </div>
                </div>
            @endforelse

    </div>

    <div class="d-flex justify-content-center">
            {{ $posts->links() }}
    </div>

</div>
@stop