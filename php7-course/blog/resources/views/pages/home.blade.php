@extends('layouts.main')

@section('title', 'Home page, in home.blade.php, displayed in main.blade.php')

@section('sidebar')
    <p>This is the side bar</p>
@endsection

@section('content')
  <p>Welcome back {{ $user_name }}</p>
@endsection
