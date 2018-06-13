@extends('layouts.main')

@section('title', 'Edit post')


@section('content')
<form action="/posts/{{ $post->id }}" method="POST">
  {{ csrf_field() }}

  <h1>Edit a post</h1>
  <hr>
<div class="form-group">
  <label for="title">Title</label>
  <input type="title" class="form-control" id="title" aria-describedby="titleHelp"
  placeholder="Enter Title" name="title" value="{{ $post->title }}">
</div>
<div class="form-group">
  <label for="content">Content</label>
  <textarea class="form-control" name="content" id="content" placeholder="Content">
  {{ $post->content }}</textarea>
</div>

<div class="form-group">
  <label for="category">Category</label>
  <select class="" name="category_id">
    @foreach ($categories as $category)
      @if($category->id == $post->category_id)
        <option value="{{$category->id}}" selected>{{ $category->name }}</Option>
      @else
        <option value="{{$category->id}}">{{ $category->name }}</Option>
      @endif
    @endforeach
  </select>
</div>

<!--  {{ $post->category }}  -->
<button type="submit" class="btn btn-primary">Save</button>
</form>
@endsection
