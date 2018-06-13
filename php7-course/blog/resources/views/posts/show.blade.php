@extends('layouts.main')

@section('title', 'Display Post')

@section('sidebar')

@endsection

@section('content')

    <h1>{{ $post->title }}</h1>
  </a>
  <p>{{ $post->content }}</p>

  <hr>

@endsection
