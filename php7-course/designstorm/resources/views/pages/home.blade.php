@extends('layouts/main')

@section('title')
  Design Storm
@endsection

@section('content')

<div id="site-section">
  <div class="container">
    <div id="home">
      <div class="search-area">
        <div class="search-container">
          <form action="/results" method="POST">
            <select class="form-control" name="useProject">
              @foreach ($project as $title)
                <option value="{{ $title->id }} {{ $title->title }}">{{ $title->title }}</option>
              @endforeach
            </select>
            {{ csrf_field() }}
            <h1>DesignStorm</h1>
            <input class="search" type="text" value="" placeholder="Search" name="keyword">
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection
