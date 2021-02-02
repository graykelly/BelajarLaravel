@extends('layouts.app')

@section('title', $post->title)
@section('content')
<div class="container">
    <h1><p>{{ $post->title }}</p></h1>
    <div class="text-secondary">
      <a href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a> &middot; {{ $post->created_at->format("d F, Y") }}
    </div>
    <hr>
    <p>{{ $post->body }}</p>
    <div>
        <!-- Button trigger modal -->
<button type="button" class="btn btn-link text-danger btn-sm p-0" data-toggle="modal" data-target="#exampleModal">
    Delete
  </button>
  
  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Are you sure?</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <div>
              <h3>Post: {{ $post->title }}</h3>
            </div>
            <div>
              <small>Published: {{ $post->created_at->format("d F, Y") }}</small>
            </div>
                <form action="/posts/{{ $post->slug }}/delete" method="post">
                    @csrf
                    @method('delete')
                    <div class="mt-4">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button class="btn btn-danger" type="submit">Delete</button>
                    </div>
                </form>
        </div>
      </div>
    </div>
  </div>

        
    </div>
</div>
@endsection