@extends('layouts.main')

@section('title', 'resources views posts index.blade.php')

@section('sidebar')
    <p>This is the side bar</p>
@endsection

@section('content')
  @foreach($posts as $post)
    <a href="/posts/{{ $post->id }}">
      <h1>{{ $post->title }}</h1>
      <h3>{{ $post->category->name }} </h3>
    </a>
    <p>{{ $post->content }}</p>

    <hr>

  @endforeach
@endsection
