@extends('layouts.main')

@section('title', 'resources views posts index.blade.php')

@section('sidebar')
    <p>This is the side bar</p>
@endsection

@section('content')
  @foreach($posts as $post)
    <a href="/posts/title">
      <h1>Title of posts</h1>
    </a>
    <p> paragraph</p>

    <hr>

  @endforeach
@endsection
