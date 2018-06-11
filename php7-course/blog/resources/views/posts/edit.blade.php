@extends('layouts.main')

@section('title', 'Home page, in home.blade.php, displayed in main.blade.php')

@section('sidebar')
    <p>This is the side bar</p>
@endsection

@section('content')
<form action="/posts/title" method="Posts">
  {{ csrf_field() }}

  <h1>Edit a post</h1>
  <hr>
<div class="form-group">
  <label for="title">Title</label>
  <input type="title" class="form-control" id="title" aria-describedby="titleHelp"
  placeholder="Enter Title" name="title">
</div>
<div class="form-group">
  <label for="content">Content</label>
  <textarea class="form-control" name="content" id="content" placeholder="Content"></textarea>
</div>
<button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection
