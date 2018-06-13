@extends('layouts.main')

@section('title', 'resources views posts index.blade.php')

@section('sidebar')
    <p>This is the side bar</p>
@endsection

@section('content')
  @foreach($posts as $post)
    <a href="/posts/title">
      <h1>{{ $post->title }}</h1>
    </a>
    <p>{{ $post->content }}</p>

    <hr>

  @endforeach
@endsection
