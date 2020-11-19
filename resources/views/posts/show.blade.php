@extends('layouts.app')

@section('title', $post->title)
@section('content')
<div class="container">
    <h1><p>{{ $post->title }}</p></h1>
    <p>{{ $post->body }}</p>
</div>
@endsection