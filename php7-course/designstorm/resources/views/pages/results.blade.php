@extends('layouts/main')

@section('title')
  results Design Storm
@endsection

@section('content')
    <div id="site-section">
      <div class="container">
        <div id="results">
          <div>
            <div class="search-container">
              <form action="/results" method="POST">
                  {{ csrf_field() }}
                <input class="search" type="text" value="{{ $searchForThis }}" placeholder="Search", name="search">
            </form>
            </div>
            <div class="boxes">
              <div class="row">

                @if(count($filteredData) >= 1)
                  @foreach ($filteredData as $project)
                    <div class="col-md-3">
                      <div class="box">
                      <!--  <div style="position: relative; background: url('{{ $project->covers->original }}') no-repeat center center;-webkit-background-size: cover;-moz-background-size: cover;-o-background-size: cover;background-size: cover; height: 200px;">
    a string original is above , when a number it has to be in {''} as below-->
                          <div style="position: relative; background: url('{{ $project->covers->{'404'} }}') no-repeat center center;-webkit-background-size: cover;-moz-background-size: cover;-o-background-size: cover;background-size: cover; height: 200px;">

                          <div class="add-btn "><i class="fa fa-check" aria-hidden="true"></i></div>
                        </div>
                        <h4>{{ $project->name }}</h4>
                      </div>
                    </div>
                  @endforeach
                @else
                  <h1> Nothing was found </h1>
                @endif

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

@endsection
